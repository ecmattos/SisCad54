<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(UserStatusTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(StateTableSeeder::class);
        #$this->call(CityTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        $this->call(MemberStatusTableSeeder::class);
        $this->call(MemberStatusReasonTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(PartnerTypeTableSeeder::class);
        $this->call(PatrimonialStatusTableSeeder::class);
        $this->call(PatrimonialTypeTableSeeder::class);
        $this->call(PatrimonialSubTypeTableSeeder::class);
        $this->call(PatrimonialSectorTableSeeder::class);
        $this->call(PatrimonialSubSectorTableSeeder::class);
        $this->call(PatrimonialBrandTableSeeder::class);
        $this->call(PatrimonialModelTableSeeder::class);
        $this->call(PatrimonialMovementTypeTableSeeder::class);
        $this->call(PaymentStatusTableSeeder::class);
        $this->call(PaymentReasonTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(MeetingTypeTableSeeder::class);
        $this->call(MaterialUnitTableSeeder::class);
    }
}
