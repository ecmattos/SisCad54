<?php 

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =
        [
            
            [
                'display_name'   => 'Administração - Banco: Inclusão',
                'name'           => 'banks.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Banco: Alteração',
                'name'           => 'banks.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Banco: Exclusão',
                'name'           => 'banks.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Banco: Consulta',
                'name'           => 'banks.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Desligamento - Motivo: Inclusão',
                'name'           => 'members_status_reasons.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Desligamento - Motivo: Alteração',
                'name'           => 'members_status_reasons.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Desligamento - Motivo: Exclusão',
                'name'           => 'members_status_reasons.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Desligamento - Motivo: Consulta',
                'name'           => 'members_status_reasons.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Sexo: Inclusão',
                'name'           => 'genders.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sexo: Alteração',
                'name'           => 'genders.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sexo: Exclusão',
                'name'           => 'genders.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sexo: Consulta',
                'name'           => 'genders.show',
                'description'    => ''
            ],


            [
                'display_name'   => 'Administração - Região: Inclusão',
                'name'           => 'regions.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Região: Alteração',
                'name'           => 'regions.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Região: Exclusão',
                'name'           => 'regions.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Região: Consulta',
                'name'           => 'regions.show',
                'description'    => ''
            ],


            [
                'display_name'   => 'Administração - Estado: Inclusão',
                'name'           => 'states.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Estado: Alteração',
                'name'           => 'states.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Estado: Exclusão',
                'name'           => 'states.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Estado: Consulta',
                'name'           => 'states.show',
                'description'    => ''
            ],


            [
                'display_name'   => 'Administração - Cidade: Inclusão',
                'name'           => 'cities.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Cidade: Alteração',
                'name'           => 'cities.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Cidade: Exclusão',
                'name'           => 'cities.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Cidade: Consulta',
                'name'           => 'cities.show',
                'description'    => ''
            ],


            [
                'display_name'   => 'Administração - Plano: Inclusão',
                'name'           => 'plans.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Plano: Alteração',
                'name'           => 'plans.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Plano: Exclusão',
                'name'           => 'plans.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Plano: Consulta',
                'name'           => 'plans.show',
                'description'    => ''
            ],


            [
                'display_name'   => 'Administração - Associados - Situação: Inclusão',
                'name'           => 'member_statuses.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Associados - Situação: Alteração',
                'name'           => 'member_statuses.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Associados - Situação: Exclusão',
                'name'           => 'member_statuses.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Associados - Situação: Consulta',
                'name'           => 'member_statuses.show',
                'description'    => ''
            ],


            [
                'display_name'  		=> 'Associados: Inclusão',
                'name'  			=> 'members.create',
                'description'	=> ''
            ],
            [
                'display_name'   => 'Associados: Alteração',
                'name'           => 'members.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Associados: Exclusão',
                'name'           => 'members.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Associados: Consulta',
                'name'           => 'members.show',
                'description'    => ''
            ],
            [
                'display_name'   => 'Associados: Pesquisa',
                'name'           => 'members.search',
                'description'    => ''
            ],

            [
                'display_name'   => 'Parceiros: Inclusão',
                'name'           => 'partners.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Alteração',
                'name'           => 'partners.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Exclusão',
                'name'           => 'partners.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Consulta',
                'name'           => 'partners.show',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Pesquisa',
                'name'           => 'dashboard.partners',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Pesquisa',
                'name'           => 'partners.search',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Relatórios',
                'name'           => 'dashboard.partners_reports',
                'description'    => ''
            ],
            [
                'display_name'   => 'Parceiros: Etiquetas',
                'name'           => 'dashboard.partners_labels',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Parceiros - Tipo: Inclusão',
                'name'           => 'partner_types.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Parceiros - Tipo: Alteração',
                'name'           => 'partner_types.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Parceiros - Tipo: Exclusão',
                'name'           => 'partner_types.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Parceiros - Tipo: Consulta',
                'name'           => 'partner_types.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Usuários: Inclusão',
                'name'           => 'users.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Usuários: Alteração',
                'name'           => 'users.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Usuários: Exclusão',
                'name'           => 'users.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Usuários: Consulta',
                'name'           => 'users.show',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração: Usuários',
                'name'           => 'users.index',
                'description'    => ''
            ],
            [
                'display_name'   => 'Associados: Relatórios',
                'name'           => 'dashboard.members_reports',
                'description'    => ''
            ],
            [
                'display_name'   => 'Associados: Etiquetas',
                'name'           => 'dashboard.members_labels',
                'description'    => ''
            ],
            [
                'display_name'   => 'Associados: Pesquisa',
                'name'           => 'dashboard.members',
                'description'    => ''
            ],
            
            [
                'display_name'   => 'Administração - Pagamentos - Situação: Inclusão',
                'name'           => 'payment_statuses.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Situação: Alteração',
                'name'           => 'payment_statuses.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Situação: Exclusão',
                'name'           => 'payment_statuses.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Situação: Consulta',
                'name'           => 'payment_statuses.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Pagamentos - Finalidade: Inclusão',
                'name'           => 'payment_reasons.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Finalidade: Alteração',
                'name'           => 'payment_reasons.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Finalidade: Exclusão',
                'name'           => 'payment_reasons.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Finalidade: Consulta',
                'name'           => 'payment_reasons.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Pagamentos - Método: Inclusão',
                'name'           => 'payment_methods.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Método: Alteração',
                'name'           => 'payment_methods.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Método: Exclusão',
                'name'           => 'payment_methods.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Pagamentos - Método: Consulta',
                'name'           => 'payment_methods.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Tipos de Ativos: Inclusão',
                'name'           => 'patrimonial_types.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos de Ativos: Alteração',
                'name'           => 'patrimonial_types.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos de Ativos: Exclusão',
                'name'           => 'patrimonial_types.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos de Ativos: Consulta',
                'name'           => 'patrimonial_types.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Sub-tipos de Ativos: Inclusão',
                'name'           => 'patrimonial_sub_types.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sub-tipos de Ativos: Alteração',
                'name'           => 'patrimonial_sub_types.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sub-tipos de Ativos: Exclusão',
                'name'           => 'patrimonial_sub_types.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sub-tipos de Ativos: Consulta',
                'name'           => 'patrimonial_sub_types.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Marcas de Ativos: Inclusão',
                'name'           => 'patrimonial_brands.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Marcas de Ativos: Alteração',
                'name'           => 'patrimonial_brands.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Marcas de Ativos: Exclusão',
                'name'           => 'patrimonial_brands.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Marcas de Ativos: Consulta',
                'name'           => 'patrimonial_brands.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Modelos de Ativos: Inclusão',
                'name'           => 'patrimonial_models.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Modelos de Ativos: Alteração',
                'name'           => 'patrimonial_models.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Modelos de Ativos: Exclusão',
                'name'           => 'patrimonial_models.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Setores de Ativos: Consulta',
                'name'           => 'patrimonial_models.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Setores de Ativos: Inclusão',
                'name'           => 'patrimonial_sectors.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Setores de Ativos: Alteração',
                'name'           => 'patrimonial_sectors.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Setores de Ativos: Exclusão',
                'name'           => 'patrimonial_sectors.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Setores de Ativos: Consulta',
                'name'           => 'patrimonial_sectors.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Administração - Sub-setores de Ativos: Inclusão',
                'name'           => 'patrimonial_sub_sectors.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sub-setores de Ativos: Alteração',
                'name'           => 'patrimonial_sub_sectors.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sub-setores de Ativos: Exclusão',
                'name'           => 'patrimonial_sub_sectors.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Sub-setores de Ativos: Consulta',
                'name'           => 'patrimonial_sub_sectors.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Filiais: Inclusão',
                'name'           => 'affiliated_societies.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Filiais: Alteração',
                'name'           => 'affiliated_societies.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Filiais: Exclusão',
                'name'           => 'affiliated_societies.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Filiais: Consulta',
                'name'           => 'affiliated_societies.show',
                'description'    => ''
            ],

            [
                'display_name'   => 'Fornecedores: Inclusão',
                'name'           => 'providers.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Fornecedores: Alteração',
                'name'           => 'providers.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Fornecedores: Exclusão',
                'name'           => 'providers.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Fornecedores: Consulta',
                'name'           => 'providers.show',
                'description'    => ''
            ],
            [
                'display_name'   => 'Ativos: Inclusão',
                'name'           => 'patrimonials.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Ativos: Alteração',
                'name'           => 'patrimonials.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Ativos: Exclusão',
                'name'           => 'patrimonials.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Ativos: Consulta',
                'name'           => 'patrimonials.show',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos Movimentações Ativos: Inclusão',
                'name'           => 'patrimonial_movement_types.create',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos Movimentações Ativos: Alteração',
                'name'           => 'patrimonial_movement_types.edit',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos Movimentações Ativos: Exclusão',
                'name'           => 'patrimonial_movement_types.destroy',
                'description'    => ''
            ],
            [
                'display_name'   => 'Administração - Tipos Movimentações Ativos: Consulta',
                'name'           => 'patrimonial_movement_types.show',
                'description'    => ''
            ],
            [
                'display_name'   => 'Ativos: Pesquisa',
                'name'           => 'patrimonials.search',
                'description'    => ''
            ],
        ];
    
        foreach ($permissions as $permission)
        {
            \SisCad\Entities\Permission::create($permission);
        }
    }
}
