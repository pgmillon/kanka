<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Vsch\TranslationManager\Translator;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localizeDatetime' ]
], function () {

    Route::get('/', 'HomeController@index')->name('home');

    // Frontend stuff
    Route::get('/about', 'FrontController@about')->name('about');
    //Route::get('/terms-of-service', 'FrontController@tos')->name('tos');
    Route::get('/privacy-policy', 'FrontController@privacy')->name('privacy');
    Route::get('/help', 'FrontController@help')->name('help');
    Route::get('/faq', 'FrontController@faq')->name('faq');

    Auth::routes();

    Route::get('/profile', 'ProfileController@edit')->name('profile');
    Route::patch('/profile', 'ProfileController@update')->name('profile.update');
    Route::patch('/profile/theme', 'ProfileController@theme')->name('profile.theme');
    Route::patch('/profile/avatar', 'ProfileController@avatar')->name('profile.avatar');
    Route::post('/logout', 'Auth\AuthController@logout')->name('logout');

    Route::get('/helper/link', 'HelperController@link')->name('helpers.link');
    Route::get('/helper/dice', 'HelperController@dice')->name('helpers.dice');

    // OAuth Routes
    Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('auth.provider');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback')->name('auth.provider.callback');

    Route::post('/logout', 'Auth\AuthController@logout')->name('logout');

    // Password
    Route::patch('/profile/password', 'ProfileController@password')->name('profile.password');
    Route::patch('/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');

    // Slug
    Route::get('/releases/{id}-{slug?}', 'ReleaseController@show');

    Route::resources([
        'releases' => 'ReleaseController',
    ]);

    Route::get('/start', 'StartController@index')->name('start');
    Route::post('/start', 'StartController@store')->name('start');

    Route::group([
        'prefix' => CampaignLocalization::setCampaign(),
        'middleware' => ['campaign']
    ], function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/dashboard/settings', 'DashboardController@edit')->name('dashboard.settings');
        Route::patch('/dashboard/settings', 'DashboardController@update')->name('dashboard.settings.update');

        // Random character
        Route::get('/characters/random', 'CharacterController@random')->name('characters.random');

        Route::get('/dice_rolls/{dice_roll}/roll', 'DiceRollController@roll')->name('dice_rolls.roll');
        Route::delete('/dice_rolls/{dice_roll}/roll/{dice_roll_result}/destroy', 'DiceRollController@destroyRoll')->name('dice_rolls.destroy_roll');

        // Locations
        Route::get('/locations/tree', 'LocationController@tree')->name('locations.tree');
        Route::any('/locations/{location}/map', 'LocationController@map')->name('locations.map');
        Route::any('/locations/{location}/map/admin', 'LocationController@mapAdmin')->name('locations.map.admin');
        Route::get('/locations/{location}/map_points/{map_point}/move', 'LocationMapPointController@move')->name('locations.map_points.move');

        // Multi-delete for cruds
        Route::post('/bulk/process', 'BulkController@process')->name('bulk.process');


        Route::post('/calendars/{calendar}/addEvent', 'CalendarController@addEvent')->name('calendars.event.add');

        // Attribute multi-save
        Route::post('/entities/{entity}/attributes/saveMany', 'AttributeController@saveMany')->name('entities.attributes.saveMany');

        // Permission save
        Route::post('/campaign_roles/{campaign_role}/savePermissions', 'CampaignRoleController@savePermissions')->name('campaign_roles.savePermissions');

        // Campaign Export
        Route::post('/campaigns/{campaign}/export', 'CampaignController@export')->name('campaigns.export');

        //Route::get('/my-campaigns', 'CampaignController@index')->name('campaign');
        Route::resources([
            'calendars' => 'CalendarController',
            'calendar_event' => 'CalendarEventController',
            'calendars.relations' => 'CalendarRelationController',
            'campaigns' => 'CampaignController',
            'campaign_user' => 'CampaignUserController',
            'characters' => 'CharacterController',
            'characters.character_organisations' => 'CharacterOrganisationController',
            'characters.relations' => 'CharacterRelationController',
            'dice_rolls' => 'DiceRollController',
            'dice_rolls.relations' => 'DiceRollRelationController',
            'dice_roll_results' => 'DiceRollResultController',
            'events' => 'EventController',
            'events.relations' => 'EventRelationController',
            'locations' => 'LocationController',
            'locations.relations' => 'LocationRelationController',
            'locations.map_points' => 'LocationMapPointController',
            'families' => 'FamilyController',
            'families.relations' => 'FamilyRelationController',
            'items' => 'ItemController',
            'items.relations' => 'ItemRelationController',
            'journals' => 'JournalController',
            'menu_links' => 'MenuLinkController',
            'organisations' => 'OrganisationController',
            'organisations.relations' => 'OrganisationRelationController',
            //'organisation_member' => 'OrganisationMemberController',
            'organisations.organisation_members' => 'OrganisationMemberController',
            'notes' => 'NoteController',
            'notes.relations' => 'NoteRelationController',
            'quests' => 'QuestController',
            'quests.quest_locations' => 'QuestLocationController',
            'quests.quest_characters' => 'QuestCharacterController',
            'quests.relations' => 'QuestRelationController',
            'sections' => 'SectionController',
            'sections.relations' => 'SectionRelationController',
            'campaign_invites' => 'CampaignInviteController',

            // Entities
            'entities.attributes' => 'AttributeController',
            'entities.entity_notes' => 'EntityNoteController',
            'entities.entity_events' => 'EntityEventController',

            'attribute_templates' => 'AttributeTemplateController',

            // Permission manager
            'campaign_roles' => 'CampaignRoleController',
            'campaign_roles.campaign_role_users' => 'CampaignRoleUserController',
            //'campaigns.campaign_roles.campaign_permissions' => 'CampaignPermissions',

        ]);
        Route::get('/campaigns/{campaign}/leave', 'CampaignController@leave')->name('campaigns.leave');
        Route::post('/campaigns/{campaign}/campaign_settings', 'CampaignSettingController@save')->name('campaigns.settings.save');

        // Search
        Route::get('/search/calendars', 'SearchController@calendars')->name('calendars.find');
        Route::get('/search/characters', 'SearchController@characters')->name('characters.find');
        Route::get('/search/campaigns', 'SearchController@campaigns')->name('campaigns.find');
        Route::get('/search/events', 'SearchController@events')->name('events.find');
        Route::get('/search/families', 'SearchController@families')->name('families.find');
        Route::get('/search/item', 'SearchController@items')->name('items.find');
        Route::get('/search/locations', 'SearchController@locations')->name('locations.find');
        Route::get('/search/notes', 'SearchController@notes')->name('notes.find');
        Route::get('/search/organisations', 'SearchController@organisations')->name('organisations.find');
        Route::get('/search/sections', 'SearchController@sections')->name('sections.find');
        Route::get('/search/dice_rolls', 'SearchController@diceRolls')->name('dice_rolls.find');

        Route::get('/search', 'SearchController@search')->name('search');
        Route::get('/search/entities', 'SearchController@entities')->name('search.relations');
        Route::get('/search/calendar_event', 'SearchController@calendarEvent')->name('search.calendar_event');
        Route::get('/search/mentions', 'SearchController@mentions')->name('search.mentions');
        Route::get('/search/months', 'SearchController@months')->name('search.months');
        Route::get('/search/live', 'SearchController@live')->name('search.live');

        Route::get('/invitation/join/{token}', 'InvitationController@join')->name('campaigns.join');

        Route::get('/redirect', 'RedirectController@index')->name('redirect');

        // Move
        Route::get('/entities/move/{entity}', 'EntityController@move')->name('entities.move');
        Route::post('/entities/move/{entity}', 'EntityController@post')->name('entities.move');

        // Export
        Route::get('/entities/export/{entity}', 'EntityController@export')->name('entities.export');

        // Attribute template
        Route::get('/entities/{entity}/attribute/template', 'AttributeController@template')->name('entities.attributes.template');
        Route::post('/entities/{entity}/attribute/template', 'AttributeController@applyTemplate')->name('entities.attributes.template');
        Route::get('/entities/{entity}/permissions', 'PermissionController@view')->name('entities.permissions');
        Route::post('/entities/{entity}/permissions', 'PermissionController@store')->name('entities.permissions');

        Route::post('/entities/create', 'EntityController@create')->name('entities.create');
    });

    // Notification
    Route::get('/notifications/delete/{id}', 'NotificationController@delete')->name('notifications.delete');
    Route::get('/notifications', 'NotificationController@index')->name('notifications');

    // 3rd party
    Route::group(['middleware' => ['translator'], 'prefix' => 'translations'], function () {
        Translator::routes();
    });

    // Admin/Moderation tools
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/campaigns', 'Admin\CampaignController@index')->name('admin.campaigns.index');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

