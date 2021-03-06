<?php

namespace SisCad\Providers;

use Illuminate\Support\ServiceProvider;

class SisCadRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \SisCad\Repositories\UserRepository::class, 
            \SisCad\Repositories\UserRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\UserStatusRepository::class, 
            \SisCad\Repositories\UserStatusRepositoryEloquent::class
        );

         $this->app->bind(
            \SisCad\Repositories\RoleRepository::class, 
            \SisCad\Repositories\RoleRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\RegionRepository::class, 
            \SisCad\Repositories\RegionRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\StateRepository::class, 
            \SisCad\Repositories\StateRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\CityRepository::class, 
            \SisCad\Repositories\CityRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PlanRepository::class, 
            \SisCad\Repositories\PlanRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\MemberStatusRepository::class, 
            \SisCad\Repositories\MemberStatusRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\MemberStatusReasonRepository::class, 
            \SisCad\Repositories\MemberStatusReasonRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PartnerTypeRepository::class, 
            \SisCad\Repositories\PartnerTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialStatusRepository::class, 
            \SisCad\Repositories\PatrimonialStatusRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialTypeRepository::class, 
            \SisCad\Repositories\PatrimonialTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialSubTypeRepository::class, 
            \SisCad\Repositories\PatrimonialSubTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialSectorRepository::class, 
            \SisCad\Repositories\PatrimonialSectorRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialSubSectorRepository::class, 
            \SisCad\Repositories\PatrimonialSubSectorRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialBrandRepository::class, 
            \SisCad\Repositories\PatrimonialBrandRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialModelRepository::class, 
            \SisCad\Repositories\PatrimonialModelRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialMovementTypeRepository::class, 
            \SisCad\Repositories\PatrimonialMovementTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialMovementRepository::class, 
            \SisCad\Repositories\PatrimonialMovementRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PaymentStatusRepository::class, 
            \SisCad\Repositories\PaymentStatusRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PaymentReasonRepository::class, 
            \SisCad\Repositories\PaymentReasonRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PaymentMethodRepository::class, 
            \SisCad\Repositories\PaymentMethodRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\MeetingTypeRepository::class, 
            \SisCad\Repositories\MeetingTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\ProviderRepository::class, 
            \SisCad\Repositories\ProviderRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialRepository::class, 
            \SisCad\Repositories\PatrimonialRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\AccountBalanceTypeRepository::class, 
            \SisCad\Repositories\AccountBalanceTypeRepositoryEloquent::class
        );
        
        $this->app->bind(
            \SisCad\Repositories\AccountCoverageTypeRepository::class, 
            \SisCad\Repositories\AccountCoverageTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\AccountTypeRepository::class, 
            \SisCad\Repositories\AccountTypeRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\AccountingAccountRepository::class, 
            \SisCad\Repositories\AccountingAccountRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\AffiliatedSocietyRepository::class, 
            \SisCad\Repositories\AffiliatedSocietyRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\BalanceSheetPreviousRepository::class, 
            \SisCad\Repositories\BalanceSheetPreviousRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\BalanceSheetRepository::class, 
            \SisCad\Repositories\BalanceSheetRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\ManagementUnitRepository::class, 
            \SisCad\Repositories\ManagementUnitRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\MaterialUnitRepository::class, 
            \SisCad\Repositories\MaterialUnitRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\MaterialRepository::class, 
            \SisCad\Repositories\MaterialRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialMaterialRepository::class, 
            \SisCad\Repositories\PatrimonialMaterialRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\ServiceRepository::class, 
            \SisCad\Repositories\ServiceRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialServiceRepository::class, 
            \SisCad\Repositories\PatrimonialServiceRepositoryEloquent::class
        );

        $this->app->bind(
            \SisCad\Repositories\PatrimonialInterventionTypeRepository::class, 
            \SisCad\Repositories\PatrimonialInterventionTypeRepositoryEloquent::class
        );
    }
}
