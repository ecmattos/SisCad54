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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DashboardController@pc_members')->name('home');

Route::group(['prefix' => 'dashboard'], function () {
	Route::get('/pc_members', 'DashboardController@pc_members')->name('dashboard.pc_members');
	Route::get('/pc_partners', 'DashboardController@pc_partners')->name('dashboard.pc_partners');

	Route::get('/members_reports', 'DashboardController@members_reports')->name('dashboard.members_reports');
	Route::get('/members_labels', 'DashboardController@members_labels')->name('dashboard.members_labels');
	Route::get('/members', 'DashboardController@members')->name('dashboard.members');

	Route::get('/partners_reports', 'DashboardController@partners_reports')->name('dashboard.partners_reports');
	Route::get('/partners_labels', 'DashboardController@partners_labels')->name('dashboard.partners_labels');
});


Route::group(['prefix' => 'regions'], function () {
	Route::get('/', 'RegionsController@index')->middleware('role:admin|permission:regions')->name('regions');
	Route::get('/create', 'RegionsController@create')->middleware('role:admin|permission:regions.create')->name('regions.create');
	Route::get('/{id}/show', 'RegionsController@show')->middleware('role:admin|permission:regions.show')->name('regions.show');
	Route::get('/{id}/edit', 'RegionsController@edit')->middleware('role:admin|permission:regions.edit')->name('regions.edit');
	Route::get('/{id}/destroy', 'RegionsController@destroy')->middleware('role:admin|permission:regions.destroy')->name('regions.destroy');
	Route::put('/{id}/update', 'RegionsController@update')->name('regions.update');
	Route::post('/', 'RegionsController@store')->name('regions.store');
});

Route::group(['prefix' => 'users'], function () {
	Route::get('/{id}/enable', 'UsersController@enable')->middleware('role:admin|permission:users.enable')->name('users.enable');
	Route::get('/{id}/disable', 'UsersController@disable')->middleware('role:admin|permission:users.disable')->name('users.disable');
	Route::get('/', 'UsersController@index')->middleware('role:admin|permission:users')->name('users');
	Route::get('/create', 'UsersController@create')->middleware('role:admin|permission:users.create')->name('users.create');
	Route::get('/{id}/show', 'UsersController@show')->middleware('role:admin|permission:users.show')->name('users.show');
	Route::get('/{id}/edit', 'UsersController@edit')->middleware('role:admin|permission:users.edit')->name('users.edit');
	Route::get('/{id}/destroy', 'UsersController@destroy')->middleware('role:admin|permission:users.destroy')->name('users.destroy');
	Route::put('/{id}/update', 'UsersController@update')->name('users.update');
	Route::post('/', 'UsersController@store')->name('users.store');
});

Route::group(['prefix' => 'roles'], function () {
	Route::get('/', 'RolesController@index')->name('roles');
	Route::get('/create', 'RolesController@create')->middleware('role:admin|permission:roles.create')->name('roles.create');
	Route::get('/{id}/show', 'RolesController@show')->middleware('role:admin|permission:roles.show')->name('roles.show');
	Route::get('/{id}/edit', 'RolesController@edit')->middleware('role:admin|permission:roles.edit')->name('roles.edit');
	Route::get('/{id}/destroy', 'RolesController@destroy')->middleware('role:admin|permission:roles.destroy')->name('roles.destroy');
	Route::put('/{id}/update', 'RolesController@update')->name('roles.update');
	Route::post('/', 'RolesController@store')->name('roles.store');

	Route::post('/{id}/permissions/store', 'RolesController@permission_store')->middleware('role:admin|permission:role_permissions.store')->name('role_permissions.store');
	Route::get('/{id}/permissions/destroy', 'RolesController@permission_destroy')->middleware('role:admin|permission:role_permissions.destroy')->name('role_permissions.destroy');

	Route::post('/{id}/users/store', 'RolesController@user_store')->name('role_users.store');
	Route::get('/{id}/users/destroy', 'RolesController@user_destroy')->name('role_users.destroy');
});

Route::group(['prefix' => 'states'], function () {
	Route::get('/', 'StatesController@index')->middleware('role:admin|permission:states')->name('states');
	Route::get('/create', 'StatesController@create')->middleware('role:admin|permission:states.create')->name('states.create');
	Route::get('/{id}/show', 'StatesController@show')->middleware('role:admin|permission:states.show')->name('states.show');
	Route::get('/{id}/edit', 'StatesController@edit')->middleware('role:admin|permission:states.edit')->name('states.edit');
	Route::get('/{id}/destroy', 'StatesController@destroy')->middleware('role:admin|permission:states.destroy')->name('states.destroy');
	Route::put('/{id}/update', 'StatesController@update')->name('states.update');
	Route::post('/', 'StatesController@store')->name('states.store');
});

Route::group(['prefix' => 'cities'], function () {
	Route::get('/', 'CitiesController@index')->middleware('role:admin|permission:cities')->name('cities');
	Route::get('/create', 'CitiesController@create')->middleware('role:admin|permission:cities.create')->name('cities.create');
	Route::get('/{id}/show', 'CitiesController@show')->middleware('role:admin|permission:cities.show')->name('cities.show');
	Route::get('/{id}/edit', 'CitiesController@edit')->middleware('role:admin|permission:cities.edit')->name('cities.edit');
	Route::get('/{id}/destroy', 'CitiesController@destroy')->middleware('role:admin|permission:cities.destroy')->name('cities.destroy');
	Route::put('/{id}/update', 'CitiesController@update')->name('cities.update');
	Route::post('/', 'CitiesController@store')->name('cities.store');
});

Route::group(['prefix' => 'plans'], function () {
	Route::get('/', 'PlansController@index')->middleware('role:admin|permission:plans')->name('plans');
	Route::get('/create', 'PlansController@create')->middleware('role:admin|permission:plans.create')->name('plans.create');
	Route::get('/{id}/show', 'PlansController@show')->middleware('role:admin|permission:plans.show')->name('plans.show');
	Route::get('/{id}/edit', 'PlansController@edit')->middleware('role:admin|permission:plans.edit')->name('plans.edit');
	Route::get('/{id}/destroy', 'PlansController@destroy')->middleware('role:admin|permission:plans.destroy')->name('plans.destroy');
	Route::put('/{id}/update', 'PlansController@update')->name('plans.update');
	Route::post('/', 'PlansController@store')->name('plans.store');
});

Route::group(['prefix' => 'member_statuses'], function () {
	Route::get('/', 'MemberStatusesController@index')->middleware('role:admin|permission:member_statuses')->name('member_statuses');
	Route::get('/create', 'MemberStatusesController@create')->middleware('role:admin|permission:member_statuses.create')->name('member_statuses.create');
	Route::get('/{id}/show', 'MemberStatusesController@show')->middleware('role:admin|permission:member_statuses.show')->name('member_statuses.show');
	Route::get('/{id}/edit', 'MemberStatusesController@edit')->middleware('role:admin|permission:member_statuses.edit')->name('member_statuses.edit');
	Route::get('/{id}/destroy', 'MemberStatusesController@destroy')->middleware('role:admin|permission:member_statuses.destroy')->name('member_statuses.destroy');
	Route::put('/{id}/update', 'MemberStatusesController@update')->name('member_statuses.update');
	Route::post('/', 'MemberStatusesController@store')->name('member_statuses.store');
});


Route::group(['prefix' => 'member_status_reasons'], function () {
	Route::get('/', 'MemberStatusReasonsController@index')->middleware('role:admin|permission:member_status_reasons')->name('member_status_reasons');
	Route::get('/create', 'MemberStatusReasonsController@create')->middleware('role:admin|permission:member_status_reasons.create')->name('member_status_reasons.create');
	Route::get('/{id}/show', 'MemberStatusReasonsController@show')->middleware('role:admin|permission:member_status_reasons.show')->name('member_status_reasons.show');
	Route::get('/{id}/edit', 'MemberStatusReasonsController@edit')->middleware('role:admin|permission:member_status_reasons.edit')->name('member_status_reasons.edit');
	Route::get('/{id}/destroy', 'MemberStatusReasonsController@destroy')->middleware('role:admin|permission:member_status_reasons.destroy')->name('member_status_reasons.destroy');
	Route::put('/{id}/update', 'MemberStatusReasonsController@update')->name('member_status_reasons.update');
	Route::post('/', 'MemberStatusReasonsController@store')->name('member_status_reasons.store');
});

Route::group(['prefix' => 'genders'], function () {
	Route::get('/', 'GendersController@index')->middleware('role:admin|permission:genders')->name('genders');
	Route::get('/create', 'GendersController@create')->middleware('role:admin|permission:genders.create')->name('genders.create');
	Route::get('/{id}/show', 'GendersController@show')->middleware('role:admin|permission:genders.show')->name('genders.show');
	Route::get('/{id}/edit', 'GendersController@edit')->middleware('role:admin|permission:genders.edit')->name('genders.edit');
	Route::get('/{id}/destroy', 'GendersController@destroy')->middleware('role:admin|permission:genders.destroy')->name('genders.destroy');
	Route::put('/{id}/update', 'GendersController@update')->name('genders.update');
	Route::post('/', 'GendersController@store')->name('genders.store');
});

Route::group(['prefix' => 'partner_types'], function () {
	Route::get('/', 'PartnerTypesController@index')->middleware('role:admin|permission:partner_types')->name('partner_types');
	Route::get('/create', 'PartnerTypesController@create')->middleware('role:admin|permission:partner_types.create')->name('partner_types.create');
	Route::get('/{id}/show', 'PartnerTypesController@show')->middleware('role:admin|permission:partner_types.show')->name('partner_types.show');
	Route::get('/{id}/edit', 'PartnerTypesController@edit')->middleware('role:admin|permission:partner_types.edit')->name('partner_types.edit');
	Route::get('/{id}/destroy', 'PartnerTypesController@destroy')->middleware('role:admin|permission:partner_types.destroy')->name('partner_types.destroy');
	Route::put('/{id}/update', 'PartnerTypesController@update')->name('partner_types.update');
	Route::post('/', 'PartnerTypesController@store')->name('partner_types.store');
});

Route::group(['prefix' => 'patrimonial_statuses'], function () {
	Route::get('/', 'PatrimonialStatusesController@index')->middleware('role:admin|permission:patrimonial_statuses')->name('patrimonial_statuses');
	Route::get('/create', 'PatrimonialStatusesController@create')->middleware('role:admin|permission:patrimonial_statuses.create')->name('patrimonial_statuses.create');
	Route::get('/{id}/show', 'PatrimonialStatusesController@show')->middleware('role:admin|permission:patrimonial_statuses.show')->name('patrimonial_statuses.show');
	Route::get('/{id}/edit', 'PatrimonialStatusesController@edit')->middleware('role:admin|permission:patrimonial_statuses.edit')->name('patrimonial_statuses.edit');
	Route::get('/{id}/destroy', 'PatrimonialStatusesController@destroy')->middleware('role:admin|permission:patrimonial_statuses.destroy')->name('patrimonial_statuses.destroy');
	Route::put('/{id}/update', 'PatrimonialStatusesController@update')->name('patrimonial_statuses.update');
	Route::post('/', 'PatrimonialStatusesController@store')->name('patrimonial_statuses.store');
});

Route::group(['prefix' => 'patrimonial_types'], function () {
	Route::get('/', 'PatrimonialTypesController@index')->middleware('role:admin|permission:patrimonial_types')->name('patrimonial_types');
	Route::get('/create', 'PatrimonialTypesController@create')->middleware('role:admin|permission:patrimonial_types.create')->name('patrimonial_types.create');
	Route::get('/{id}/show', 'PatrimonialTypesController@show')->middleware('role:admin|permission:patrimonial_types.show')->name('patrimonial_types.show');
	Route::get('/{id}/edit', 'PatrimonialTypesController@edit')->middleware('role:admin|permission:patrimonial_types.edit')->name('patrimonial_types.edit');
	Route::get('/{id}/destroy', 'PatrimonialTypesController@destroy')->middleware('role:admin|permission:patrimonial_types.destroy')->name('patrimonial_types.destroy');
	Route::put('/{id}/update', 'PatrimonialTypesController@update')->name('patrimonial_types.update');
	Route::post('/', 'PatrimonialTypesController@store')->name('patrimonial_types.store');
});

Route::group(['prefix' => 'patrimonial_sub_types'], function () {
	Route::get('/', 'PatrimonialSubTypesController@index')->middleware('role:admin|permission:patrimonial_sub_types')->name('patrimonial_sub_types');
	Route::get('/create', 'PatrimonialSubTypesController@create')->middleware('role:admin|permission:patrimonial_sub_types.create')->name('patrimonial_sub_types.create');
	Route::get('/{id}/show', 'PatrimonialSubTypesController@show')->middleware('role:admin|permission:patrimonial_sub_types.show')->name('patrimonial_sub_types.show');
	Route::get('/{id}/edit', 'PatrimonialSubTypesController@edit')->middleware('role:admin|permission:patrimonial_sub_types.edit')->name('patrimonial_sub_types.edit');
	Route::get('/{id}/destroy', 'PatrimonialSubTypesController@destroy')->middleware('role:admin|permission:patrimonial_sub_types.destroy')->name('patrimonial_sub_types.destroy');
	Route::put('/{id}/update', 'PatrimonialSubTypesController@update')->name('patrimonial_sub_types.update');
	Route::post('/', 'PatrimonialSubTypesController@store')->name('patrimonial_sub_types.store');
});

Route::group(['prefix' => 'patrimonial_sectors'], function () {
	Route::get('/', 'PatrimonialSectorsController@index')->middleware('role:admin|permission:patrimonial_sectors')->name('patrimonial_sectors');
	Route::get('/create', 'PatrimonialSectorsController@create')->middleware('role:admin|permission:patrimonial_sectors.create')->name('patrimonial_sectors.create');
	Route::get('/{id}/show', 'PatrimonialSectorsController@show')->middleware('role:admin|permission:patrimonial_sectors.show')->name('patrimonial_sectors.show');
	Route::get('/{id}/edit', 'PatrimonialSectorsController@edit')->middleware('role:admin|permission:patrimonial_sectors.edit')->name('patrimonial_sectors.edit');
	Route::get('/{id}/destroy', 'PatrimonialSectorsController@destroy')->middleware('role:admin|permission:patrimonial_sectors.destroy')->name('patrimonial_sectors.destroy');
	Route::put('/{id}/update', 'PatrimonialSectorsController@update')->name('patrimonial_sectors.update');
	Route::post('/', 'PatrimonialSectorsController@store')->name('patrimonial_sectors.store');
});

Route::group(['prefix' => 'patrimonial_sub_sectors'], function () {
	Route::get('/', 'PatrimonialSubSectorsController@index')->middleware('role:admin|permission:patrimonial_sub_sectors')->name('patrimonial_sub_sectors');
	Route::get('/create', 'PatrimonialSubSectorsController@create')->middleware('role:admin|permission:patrimonial_sub_sectors.create')->name('patrimonial_sub_sectors.create');
	Route::get('/{id}/show', 'PatrimonialSubSectorsController@show')->middleware('role:admin|permission:patrimonial_sub_sectors.show')->name('patrimonial_sub_sectors.show');
	Route::get('/{id}/edit', 'PatrimonialSubSectorsController@edit')->middleware('role:admin|permission:patrimonial_sub_sectors.edit')->name('patrimonial_sub_sectors.edit');
	Route::get('/{id}/destroy', 'PatrimonialSubSectorsController@destroy')->middleware('role:admin|permission:patrimonial_sub_sectors.destroy')->name('patrimonial_sub_sectors.destroy');
	Route::put('/{id}/update', 'PatrimonialSubSectorsController@update')->name('patrimonial_sub_sectors.update');
	Route::post('/', 'PatrimonialSubSectorsController@store')->name('patrimonial_sub_sectors.store');
});

Route::group(['prefix' => 'patrimonial_brands'], function () {
	Route::get('/', 'PatrimonialBrandsController@index')->middleware('role:admin|permission:patrimonial_brands')->name('patrimonial_brands');
	Route::get('/create', 'PatrimonialBrandsController@create')->middleware('role:admin|permission:patrimonial_brands.create')->name('patrimonial_brands.create');
	Route::get('/{id}/show', 'PatrimonialBrandsController@show')->middleware('role:admin|permission:patrimonial_brands.show')->name('patrimonial_brands.show');
	Route::get('/{id}/edit', 'PatrimonialBrandsController@edit')->middleware('role:admin|permission:patrimonial_brands.edit')->name('patrimonial_brands.edit');
	Route::get('/{id}/destroy', 'PatrimonialBrandsController@destroy')->middleware('role:admin|permission:patrimonial_brands.destroy')->name('patrimonial_brands.destroy');
	Route::put('/{id}/update', 'PatrimonialBrandsController@update')->name('patrimonial_brands.update');
	Route::post('/', 'PatrimonialBrandsController@store')->name('patrimonial_brands.store');
});

Route::group(['prefix' => 'patrimonial_models'], function () {
	Route::get('/', 'PatrimonialModelsController@index')->middleware('role:admin|permission:patrimonial_models')->name('patrimonial_models');
	Route::get('/create', 'PatrimonialModelsController@create')->middleware('role:admin|permission:patrimonial_models.create')->name('patrimonial_models.create');
	Route::get('/{id}/show', 'PatrimonialModelsController@show')->middleware('role:admin|permission:patrimonial_models.show')->name('patrimonial_models.show');
	Route::get('/{id}/edit', 'PatrimonialModelsController@edit')->middleware('role:admin|permission:patrimonial_models.edit')->name('patrimonial_models.edit');
	Route::get('/{id}/destroy', 'PatrimonialModelsController@destroy')->middleware('role:admin|permission:patrimonial_models.destroy')->name('patrimonial_models.destroy');
	Route::put('/{id}/update', 'PatrimonialModelsController@update')->name('patrimonial_models.update');
	Route::post('/', 'PatrimonialModelsController@store')->name('patrimonial_models.store');
});

Route::group(['prefix' => 'patrimonial_movement_types'], function () {
	Route::get('/', 'PatrimonialMovementTypesController@index')->middleware('role:admin|permission:patrimonial_movement_types')->name('patrimonial_movement_types');
	Route::get('/create', 'PatrimonialMovementTypesController@create')->middleware('role:admin|permission:patrimonial_movement_types.create')->name('patrimonial_movement_types.create');
	Route::get('/{id}/show', 'PatrimonialMovementTypesController@show')->middleware('role:admin|permission:patrimonial_movement_types.show')->name('patrimonial_movement_types.show');
	Route::get('/{id}/edit', 'PatrimonialMovementTypesController@edit')->middleware('role:admin|permission:patrimonial_movement_types.edit')->name('patrimonial_movement_types.edit');
	Route::get('/{id}/destroy', 'PatrimonialMovementTypesController@destroy')->middleware('role:admin|permission:patrimonial_movement_types.destroy')->name('patrimonial_movement_types.destroy');
	Route::put('/{id}/update', 'PatrimonialMovementTypesController@update')->name('patrimonial_movement_types.update');
	Route::post('/', 'PatrimonialMovementTypesController@store')->name('patrimonial_movement_types.store');
});

Route::group(['prefix' => 'payment_statuses'], function () {
	Route::get('/', 'PaymentStatusesController@index')->middleware('role:admin|permission:payment_statuses')->name('payment_statuses');
	Route::get('/create', 'PaymentStatusesController@create')->middleware('role:admin|permission:payment_statuses.create')->name('payment_statuses.create');
	Route::get('/{id}/show', 'PaymentStatusesController@show')->middleware('role:admin|permission:payment_statuses.show')->name('payment_statuses.show');
	Route::get('/{id}/edit', 'PaymentStatusesController@edit')->middleware('role:admin|permission:payment_statuses.edit')->name('payment_statuses.edit');
	Route::get('/{id}/destroy', 'PaymentStatusesController@destroy')->middleware('role:admin|permission:payment_statuses.destroy')->name('payment_statuses.destroy');
	Route::put('/{id}/update', 'PaymentStatusesController@update')->name('payment_statuses.update');
	Route::post('/', 'PaymentStatusesController@store')->name('payment_statuses.store');
});

Route::group(['prefix' => 'payment_reasons'], function () {
	Route::get('/', 'PaymentReasonsController@index')->middleware('role:admin|permission:payment_reasons')->name('payment_reasons');
	Route::get('/create', 'PaymentReasonsController@create')->middleware('role:admin|permission:payment_reasons.create')->name('payment_reasons.create');
	Route::get('/{id}/show', 'PaymentReasonsController@show')->middleware('role:admin|permission:payment_reasons.show')->name('payment_reasons.show');
	Route::get('/{id}/edit', 'PaymentReasonsController@edit')->middleware('role:admin|permission:payment_reasons.edit')->name('payment_reasons.edit');
	Route::get('/{id}/destroy', 'PaymentReasonsController@destroy')->middleware('role:admin|permission:payment_reasons.destroy')->name('payment_reasons.destroy');
	Route::put('/{id}/update', 'PaymentReasonsController@update')->name('payment_reasons.update');
	Route::post('/', 'PaymentReasonsController@store')->name('payment_reasons.store');
});

Route::group(['prefix' => 'payment_methods'], function () {
	Route::get('/', 'PaymentMethodsController@index')->middleware('role:admin|permission:payment_methods')->name('payment_methods');
	Route::get('/create', 'PaymentMethodsController@create')->middleware('role:admin|permission:payment_methods.create')->name('payment_methods.create');
	Route::get('/{id}/show', 'PaymentMethodsController@show')->middleware('role:admin|permission:payment_methods.show')->name('payment_methods.show');
	Route::get('/{id}/edit', 'PaymentMethodsController@edit')->middleware('role:admin|permission:payment_methods.edit')->name('payment_methods.edit');
	Route::get('/{id}/destroy', 'PaymentMethodsController@destroy')->middleware('role:admin|permission:payment_methods.destroy')->name('payment_methods.destroy');
	Route::put('/{id}/update', 'PaymentMethodsController@update')->name('payment_methods.update');
	Route::post('/', 'PaymentMethodsController@store')->name('payment_methods.store');
});

Route::group(['prefix' => 'meeting_types'], function () {
	Route::get('/', 'MeetingTypesController@index')->middleware('role:admin|permission:meeting_types')->name('meeting_types');
	Route::get('/create', 'MeetingTypesController@create')->middleware('role:admin|permission:meeting_types.create')->name('meeting_types.create');
	Route::get('/{id}/show', 'MeetingTypesController@show')->middleware('role:admin|permission:meeting_types.show')->name('meeting_types.show');
	Route::get('/{id}/edit', 'MeetingTypesController@edit')->middleware('role:admin|permission:meeting_types.edit')->name('meeting_types.edit');
	Route::get('/{id}/destroy', 'MeetingTypesController@destroy')->middleware('role:admin|permission:meeting_types.destroy')->name('meeting_types.destroy');
	Route::put('/{id}/update', 'MeetingTypesController@update')->name('meeting_types.update');
	Route::post('/', 'MeetingTypesController@store')->name('meeting_types.store');
});

Route::group(['prefix' => 'meetings'], function () {
	Route::get('/', 'MeetingsController@index')->middleware('role:admin|permission:meetings')->name('meetings');
	Route::get('/create', 'MeetingsController@create')->middleware('role:admin|permission:meetings.create')->name('meetings.create');
	Route::get('/{id}/show', 'MeetingsController@show')->middleware('role:admin|permission:meetings.show')->name('meetings.show');
	Route::get('/{id}/edit', 'MeetingsController@edit')->middleware('role:admin|permission:meetings.edit')->name('meetings.edit');
	Route::get('/{id}/destroy', 'MeetingsController@destroy')->middleware('role:admin|permission:meetings.destroy')->name('meetings.destroy');
	Route::put('/{id}/update', 'MeetingsController@update')->name('meetings.update');
	Route::post('/', 'MeetingsController@store')->name('meetings.store');

	Route::get('/{id}/attendance_list_reports', ['as' => 'meetings.attendance_list_reports', 'uses' => 'MeetingsController@attendance_list_reports']);
});

Route::group(['prefix' => 'affiliated_societies'], function () {
	Route::get('/', 'AffiliatedSocietiesController@index')->middleware('role:admin|permission:affiliated_societies')->name('affiliated_societies');
	Route::get('/create', 'AffiliatedSocietiesController@create')->middleware('role:admin|permission:affiliated_societies.create')->name('affiliated_societies.create');
	Route::get('/{id}/show', 'AffiliatedSocietiesController@show')->middleware('role:admin|permission:affiliated_societies.show')->name('affiliated_societies.show');
	Route::get('/{id}/edit', 'AffiliatedSocietiesController@edit')->middleware('role:admin|permission:affiliated_societies.edit')->name('affiliated_societies.edit');
	Route::get('/{id}/destroy', 'AffiliatedSocietiesController@destroy')->middleware('role:admin|permission:affiliated_societies.destroy')->name('affiliated_societies.destroy');
	Route::put('/{id}/update', 'AffiliatedSocietiesController@update')->name('affiliated_societies.update');
	Route::post('/', 'AffiliatedSocietiesController@store')->name('affiliated_societies.store');
});

Route::group(['prefix' => 'providers'], function () {
	Route::get('/', 'ProvidersController@index')->middleware('role:admin|permission:providers')->name('providers');
	Route::get('/create', 'ProvidersController@create')->middleware('role:admin|permission:providers.create')->name('providers.create');
	Route::get('/{id}/show', 'ProvidersController@show')->middleware('role:admin|permission:providers.show')->name('providers.show');
	Route::get('/{id}/edit', 'ProvidersController@edit')->middleware('role:admin|permission:providers.edit')->name('providers.edit');
	Route::get('/{id}/destroy', 'ProvidersController@destroy')->middleware('role:admin|permission:providers.destroy')->name('providers.destroy');
	Route::put('/{id}/update', 'ProvidersController@update')->name('providers.update');
	Route::post('/', 'ProvidersController@store')->name('providers.store');
});

Route::group(['prefix' => 'patrimonials'], function () {
	Route::get('/', 'PatrimonialsController@search')->middleware('role:admin|permission:patrimonials.search')->name('patrimonials.search');
	Route::post('/search_results', 'PatrimonialsController@search_results')->name('patrimonials.search_results');
	Route::get('/create', 'PatrimonialsController@create')->middleware('role:admin|permission:patrimonials.create')->name('patrimonials.create');
	Route::get('/{id}/show', 'PatrimonialsController@show')->middleware('role:admin|permission:patrimonials.show')->name('patrimonials.show');
	Route::get('/{id}/edit', 'PatrimonialsController@edit')->middleware('role:admin|permission:patrimonials.edit')->name('patrimonials.edit');
	Route::get('/{id}/destroy', 'PatrimonialsController@destroy')->middleware('role:admin|permission:patrimonials.destroy')->name('patrimonials.destroy');
	Route::put('/{id}/update', 'PatrimonialsController@update')->name('patrimonials.update');
	Route::post('/', 'PatrimonialsController@store')->name('patrimonials.store');
});

Route::group(['prefix' => 'members'], function () {
	Route::get('/', 'MembersController@search')->middleware('role:admin|permission:members,search')->name('members.search');
	Route::post('/search_results', 'MembersController@search_results')->name('members.search_results');
	Route::get('/search_results_back', 'MembersController@search_results_back')->name('members.search_results_back'); 
	Route::get('/create', 'MembersController@create')->middleware('role:admin|permission:members.create')->name('members.create');
	Route::get('/{id}/show', 'MembersController@show')->middleware('role:admin|permission:members.show')->name('members.show');
	Route::get('/{id}/edit', 'MembersController@edit')->middleware('role:admin|permission:members.edit')->name('members.edit');
	Route::get('/{id}/destroy', 'MembersController@destroy')->middleware('role:admin|permission:members.destroy')->name('members.destroy');
	Route::put('/{id}/update', 'MembersController@update')->name('members.update');
	Route::post('/', 'MembersController@store')->name('members.store');
});

Route::group(['prefix' => '/accounting_accounts'], function () {
	Route::get('/', 'AccountingAccountsController@index')->middleware('role:admin|permission:accounting_accounts')->name('accounting_accounts');
	Route::get('/create', 'AccountingAccountsController@create')->middleware('role:admin|permission:accounting_accounts.create')->name('accounting_accounts.create');
	Route::get('/{id}/show', 'AccountingAccountsController@show')->middleware('role:admin|permission:accounting_accounts.show')->name('accounting_accounts.show');
	Route::get('/{id}/edit', 'AccountingAccountsController@edit')->middleware('role:admin|permission:accounting_accounts.edit')->name('accounting_accounts.edit');
	Route::get('/{id}/destroy', 'AccountingAccountsController@destroy')->middleware('role:admin|permission:accounting_accounts.destroy')->name('accounting_accounts.destroy');
	Route::put('/{id}/update', 'AccountingAccountsController@update')->name('accounting_accounts.update');
	Route::post('/', 'AccountingAccountsController@store')->name('accounting_accounts.store');
});

Route::group(['prefix' => '/balance_sheet_previouses'], function () {
	Route::get('/', 'BalanceSheetPreviousesController@index')->middleware('role:admin|permission:balance_sheet_previouses')->name('balance_sheet_previouses');
	Route::get('/create', 'BalanceSheetPreviousesController@create')->middleware('role:admin|permission:balance_sheet_previouses.create')->name('balance_sheet_previouses.create');
	Route::get('/{id}/show', 'BalanceSheetPreviousesController@show')->middleware('role:admin|permission:balance_sheet_previouses.show')->name('balance_sheet_previouses.show');
	Route::get('/{id}/edit', 'BalanceSheetPreviousesController@edit')->middleware('role:admin|permission:balance_sheet_previouses.edit')->name('balance_sheet_previouses.edit');
	Route::get('/{id}/destroy', 'BalanceSheetPreviousesController@destroy')->middleware('role:admin|permission:balance_sheet_previouses.destroy')->name('balance_sheet_previouses.destroy');
	Route::put('/{id}/update', 'BalanceSheetPreviousesController@update')->name('balance_sheet_previouses.update');
	Route::post('/', 'BalanceSheetPreviouses@store')->name('balance_sheet_previouses.store');
	Route::get('/search', 'BalanceSheetPreviousesControllerController@search')->middleware('role:admin|permission:balance_sheet_previouses.search')->name('balance_sheet_previouses.search'); 
	Route::post('/search_results', 'BalanceSheetPreviousesController@search_results')->name('balance_sheet_previouses.search_results');      
	Route::post('/search_results_back', 'BalanceSheetPreviousesController@search_results_back')->name('balance_sheet_previouses.search_results_back'); 
});


Route::group(['prefix' => '/management_units'], function () {
	Route::get('/', 'ManagementUnitsController@index')->middleware('role:admin|permission:management_units')->name('management_units');
	Route::get('/create', 'ManagementUnitsController@create')->middleware('role:admin|permission:management_units.create')->name('management_units.create');
	Route::get('/{id}/show', 'ManagementUnitsController@show')->middleware('role:admin|permission:management_units.show')->name('management_units.show');
	Route::get('/{id}/edit', 'ManagementUnitsController@edit')->middleware('role:admin|permission:management_units.edit')->name('management_units.edit');
	Route::get('/{id}/destroy', 'ManagementUnitsController@destroy')->middleware('role:admin|permission:management_units.destroy')->name('management_units.destroy');
	Route::put('/{id}/update', 'ManagementUnitsController@update')->name('management_units.update');
	Route::post('/', 'ManagementUnitsController@store')->name('management_units.store');
});


Route::group(['prefix' => '/material_units'], function () {
	Route::get('/', 'MaterialUnitsController@index')->middleware('role:admin|permission:material_units')->name('material_units');
	Route::get('/create', 'MaterialUnitsController@create')->middleware('role:admin|permission:material_units.create')->name('material_units.create');
	Route::get('/{id}/show', 'MaterialUnitsController@show')->middleware('role:admin|permission:material_units.show')->name('material_units.show');
	Route::get('/{id}/edit', 'MaterialUnitsController@edit')->middleware('role:admin|permission:material_units.edit')->name('material_units.edit');
	Route::get('/{id}/destroy', 'MaterialUnitsController@destroy')->middleware('role:admin|permission:material_units.destroy')->name('material_units.destroy');
	Route::put('/{id}/update', 'MaterialUnitsController@update')->name('material_units.update');
	Route::post('/', 'MaterialUnitsController@store')->name('material_units.store');
});

Route::group(['prefix' => '/materials'], function () {
	Route::get('/', 'MaterialsController@index')->middleware('role:admin|permission:materials')->name('materials');
	Route::get('/create', 'MaterialsController@create')->middleware('role:admin|permission:materials.create')->name('materials.create');
	Route::get('/{id}/show', 'MaterialsController@show')->middleware('role:admin|permission:materials.show')->name('materials.show');
	Route::get('/{id}/edit', 'MaterialsController@edit')->middleware('role:admin|permission:materials.edit')->name('materials.edit');
	Route::get('/{id}/destroy', 'MaterialsController@destroy')->middleware('role:admin|permission:materials.destroy')->name('materials.destroy');
	Route::put('/{id}/update', 'MaterialsController@update')->name('materials.update');
	Route::post('/', 'MaterialsController@store')->name('materials.store');
});


