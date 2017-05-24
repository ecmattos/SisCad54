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
            \SisCad\Repositories\AffiliatedSocietyRepository::class, 
            \SisCad\Repositories\AffiliatedSocietyRepositoryEloquent::class
        );
    }
}
