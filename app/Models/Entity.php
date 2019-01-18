<?php

namespace App\Models;

use App\Traits\CampaignTrait;
use App\Traits\EntityAclTrait;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Illuminate\Support\Facades\DB;
use RichanFongdasen\EloquentBlameable\BlameableTrait;

/**
 * Class Entity
 * @package App\Models
 *
 * @property integer $entity_id
 * @property integer $campaign_id
 * @property string $name
 * @property string $type
 * @property boolean $is_private
 * @property Tag[] $tags
 */
class Entity extends Model
{
    const TYPE_LOCATION = 'location';

    /**
     * @var array
     */
    protected $fillable = [
        'campaign_id',
        'entity_id',
        'name',
        'type',
        'is_private',
    ];

    /**
     * Traits
     */
    use CampaignTrait, BlameableTrait, EntityAclTrait;

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns = [
        'name'
    ];

    /**
     * Get the child location
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function child()
    {
        return $this->{$this->type}();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes()
    {
        return $this->hasMany('App\Models\Attribute', 'entity_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attribute_template()
    {
        return $this->hasOne('App\Models\AttributeTemplate', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character()
    {
        return $this->hasOne('App\Models\Character', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dice_roll()
    {
        return $this->hasOne('App\Models\DiceRoll', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne('App\Models\Event', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function family()
    {
        return $this->hasOne('App\Models\Family', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function item()
    {
        return $this->hasOne('App\Models\Item', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function journal()
    {
        return $this->hasOne('App\Models\Journal', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->hasOne('App\Models\Location', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function note()
    {
        return $this->hasOne('App\Models\Note', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function organisation()
    {
        return $this->hasOne('App\Models\Organisation', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function quest()
    {
        return $this->hasOne('App\Models\Quest', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function calendar()
    {
        return $this->hasOne('App\Models\Calendar', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function tag()
    {
        return $this->hasOne('App\Models\Tag', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function tags()
    {
        return $this->belongsToMany(
            'App\Models\Tag',
            'entity_tags',
            'entity_id',
            'tag_id',
            'id',
            'id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function conversation()
    {
        return $this->hasOne('App\Models\Conversation', 'id', 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function race()
    {
        return $this->hasOne('App\Models\Race', 'id', 'entity_id');
    }

    /**
     * Create a short name for the interface
     * @return mixed|string
     */
    public function shortName()
    {
        if (strlen($this->name) > 30) {
            return '<span title="' . e($this->name) . '">' . substr(e($this->name), 0, 28) . '...</span>';
        }
        return $this->name;
    }

    /**
     * @return null
     */
    public function tooltip()
    {
        return $this->child ? $this->child->tooltip() : null;
    }

    /**
     * Short tooltip with location name
     * @return mixed
     */
    public function tooltipWithName()
    {
        $text = $this->tooltip();
        if (empty($text)) {
            return $this->child->name;
        }
        // Replace double quotes with real quotes again, as they break tinymce
        return '<h4>' . $this->child->name . '</h4>' . str_replace('&amp;quot;', '"', $text);
    }

    /**
     * @param string $action
     * @return string
     */
    public function url($action = 'show')
    {
        if ($action == 'index') {
            return route($this->pluralType() . '.index');
        }
        return route($this->pluralType() . '.' . $action, $this->child->id);
    }

    /**
     * @param $query
     * @param $type
     * @return mixed
     */
    public function scopeType($query, $type)
    {
        if (empty($type)) {
            return $query;
        }
        return $query->where('type', $type);
    }

    /**
     * @param $query
     * @param $term
     * @return mixed
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($q) use ($term) {
            foreach ($this->searchableColumns as $col) {
                $q->orWhere($col, 'like', '%$term%');
            }
        });
    }

    /**
     * @return string
     */
    public function pluralType()
    {
        if ($this->type == 'family') {
            return 'families';
        }
        return $this->type . 's';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relationships()
    {
        return $this->hasMany('App\Models\Relation', 'owner_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function targetRelationships()
    {
        return $this->hasMany('App\Models\Relation', 'target_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany('App\Models\EntityNote', 'entity_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasMany('App\Models\EntityFile', 'entity_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Models\EntityEvent', 'entity_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany('App\Models\CampaignPermission', 'entity_id', 'id');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeTop($query)
    {
        return $query
            ->select('*', DB::raw('count(id) as cpt'))
            ->groupBy('type')
            ->orderBy('cpt', 'desc');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeRecentlyModified($query)
    {
        return $query
            ->orderBy('updated_at', 'desc');
    }
}
