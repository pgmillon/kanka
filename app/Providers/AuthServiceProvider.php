<?php

namespace App\Providers;

use App\Models\Campaign;
use App\Models\CampaignUser;
use App\Policies\CampaignPolicy;
use App\Policies\CampaignUserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        if (!app()->runningInConsole()) {
            $this->registerPolicies();
        }
    }

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        CampaignUser::class => CampaignUserPolicy::class,
        Campaign::class => CampaignPolicy::class,
        'App\Models\AttributeTemplate' => 'App\Policies\AttributeTemplatePolicy',
        'App\Models\Calendar' => 'App\Policies\CalendarPolicy',
        'App\Models\CampaignInvite' => 'App\Policies\CampaignInvitePolicy',
        'App\Models\CampaignRole' => 'App\Policies\CampaignRolePolicy',
        'App\Models\CampaignRoleUser' => 'App\Policies\CampaignRoleUserPolicy',
        'App\Models\CampaignPermission' => 'App\Policies\CampaignPermission',
        'App\Models\Character' => 'App\Policies\CharacterPolicy',
        'App\Models\DiceRoll' => 'App\Policies\DiceRollPolicy',
        'App\Models\DiceRollResult' => 'App\Policies\DiceRollResultPolicy',
        'App\Models\Event' => 'App\Policies\EventPolicy',
        'App\Models\Family' => 'App\Policies\FamilyPolicy',
        'App\Models\Item' => 'App\Policies\ItemPolicy',
        'App\Models\Journal' => 'App\Policies\JournalPolicy',
        'App\Models\Location' => 'App\Policies\LocationPolicy',
        'App\Models\MapPoint' => 'App\Policies\LocationMapPointPolicy',
        'App\Models\MenuLink' => 'App\Policies\MenuLinkPolicy',
        'App\Models\Note' => 'App\Policies\NotePolicy',
        'App\Models\Organisation' => 'App\Policies\OrganisationPolicy',
        'App\Models\Quest' => 'App\Policies\QuestPolicy',
        'App\Models\Section' => 'App\Policies\SectionPolicy',
    ];
}
