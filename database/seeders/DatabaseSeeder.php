<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectStatus;
use App\Models\ProjectTask;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Administração',
            'email' => 'atendimento@dreamake.com.br',
            'role_id' => 1,
            'password' => Hash::make('Inc@ns4v3l_2024'),
            'created_by' => 0,
        ]);

        ProjectCategory::create([
            'name' => 'Tráfego Pago',
            'created_by' => 1,
        ]);

        ProjectCategory::create([
            'name' => 'Marketing Digital',
            'created_by' => 1,
        ]);

        ProjectCategory::create([
            'name' => 'Social Media',
            'created_by' => 1,
        ]);

        ProjectCategory::create([
            'name' => 'Web Design',
            'created_by' => 1,
        ]);

        ProjectCategory::create([
            'name' => 'Design',
            'created_by' => 1,
        ]);

        Project::create([
            'name' => 'Campanha de Marketing Digital',
            'url' => 'campanha-de-marketing-digital',
            'color' => '#5632a8',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'start_date' => now(),
            'category_id' => 1,
            'manager_id' => 1,
            'created_by' => 1,
        ]);

        Project::create([
            'name' => 'Campanha de Mídias Sociais',
            'url' => 'campanha-de-midias-sociais',
            'color' => '#FF5733',
            'description' => 'Uma campanha estratégica para aumentar o engajamento e alcance nas principais plataformas de mídias sociais.',
            'start_date' => now(),
            'category_id' => 2,
            'manager_id' => 1,
            'created_by' => 1,
        ]);

        Project::create([
            'name' => 'Campanha de E-mail Marketing',
            'url' => 'campanha-de-email-marketing',
            'color' => '#1ABC9C',
            'description' => 'Uma série de e-mails estratégicos para promover produtos, engajar clientes e aumentar as vendas.',
            'start_date' => now(),
            'category_id' => 3,
            'manager_id' => 1,
            'created_by' => 1,
        ]);
        
        Project::create([
            'name' => 'Otimização de SEO',
            'url' => 'otimizacao-de-seo',
            'color' => '#9B59B6',
            'description' => 'Um projeto focado em melhorar a classificação nos mecanismos de busca, aumentando o tráfego orgânico para o site.',
            'start_date' => now(),
            'category_id' => 4,
            'manager_id' => 1,
            'created_by' => 1,
        ]);

        Project::create([
            'name' => 'Marketing de Conteúdo',
            'url' => 'marketing-de-conteudo',
            'color' => '#3498DB',
            'description' => 'Estratégia para criar e distribuir conteúdo relevante para atrair e engajar o público-alvo.',
            'start_date' => now(),
            'category_id' => 5,
            'manager_id' => 1,
            'created_by' => 1,
        ]);
        
        Project::create([
            'name' => 'Publicidade Online',
            'url' => 'publicidade-online',
            'color' => '#009ef7',
            'description' => 'Uma campanha paga direcionada para alcançar o público-alvo em sites, redes sociais e mecanismos de busca.',
            'start_date' => now(),
            'category_id' => 2,
            'manager_id' => 1,
            'created_by' => 1,
        ]);

        Project::create([
            'name' => 'Marketing de Influenciadores',
            'url' => 'marketing-de-influenciadores',
            'color' => '#27AE60',
            'description' => 'Colaboração com influenciadores digitais para promover produtos ou serviços para suas audiências.',
            'start_date' => now(),
            'category_id' => 3,
            'manager_id' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'A Fazer',
            'color' => '#009ef7',
            'project_id' => 1,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Em andamento',
            'color' => '#79bc17',
            'project_id' => 1,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Concluído',
            'color' => '#282c43',
            'project_id' => 1,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'A Fazer',
            'color' => '#009ef7',
            'project_id' => 2,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Em andamento',
            'color' => '#79bc17',
            'project_id' => 2,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Concluído',
            'color' => '#282c43',
            'project_id' => 2,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'A Fazer',
            'color' => '#009ef7',
            'project_id' => 3,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Em andamento',
            'color' => '#79bc17',
            'project_id' => 3,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Concluído',
            'color' => '#282c43',
            'project_id' => 3,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'A Fazer',
            'color' => '#009ef7',
            'project_id' => 4,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Em andamento',
            'color' => '#79bc17',
            'project_id' => 4,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Concluído',
            'color' => '#282c43',
            'project_id' => 4,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'A Fazer',
            'color' => '#009ef7',
            'project_id' => 5,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Em andamento',
            'color' => '#79bc17',
            'project_id' => 5,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectStatus::create([
            'name' => 'Concluído',
            'color' => '#282c43',
            'project_id' => 5,
            'order' => 1,
            'created_by' => 1,
        ]);

        ProjectTask::create([
            'project_id' => 1,
            'status_id' => 1,
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Reunião com cliente para entender o projeto',
            'phrase' => 'Levar 5 ideias para facilitar a comunicação',
            'created_by' => rand(1, 5),
        ]);

        ProjectTask::create([
            'project_id' => 1,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Desenvolvimento de protótipo inicial',
            'phrase' => 'Garantir que os principais recursos estejam funcionando corretamente',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 1,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Testes de Usabilidade',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 1,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Implementação de novos recursos',
            'phrase' => 'Adicionar funcionalidades solicitadas pelo cliente',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 1,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Revisão de código',
            'phrase' => 'Verificar e corrigir erros no código-fonte',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 1,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Preparação para entrega do projeto',
            'phrase' => 'Garantir que todos os requisitos estejam atendidos antes da entrega ao cliente',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Implementação de funcionalidade de chat em tempo real',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Otimização de desempenho da aplicação',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Implementação de sistema de notificações por e-mail',
            'phrase' => 'Desenvolver um sistema de notificações por e-mail para alertar os usuários sobre eventos importantes',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Refatoração do código-fonte',
            'phrase' => 'Reestruturar o código para torná-lo mais legível e sustentável a longo prazo',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 6,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Testes de segurança da aplicação',
            'phrase' => 'Realizar testes de segurança para identificar e corrigir possíveis vulnerabilidades',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Desenvolvimento de interface de administração',
            'phrase' => 'Criar uma interface de administração para gerenciar conteúdos e usuários do sistema',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 3,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Integração com API de terceiros',
            'phrase' => 'Integrar com API de terceiros para adicionar novos recursos ao sistema',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 3,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Melhoria na documentação do código',
            'phrase' => 'Atualizar e aprimorar a documentação do código para facilitar a manutenção futura',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 3,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Implementação de sistema de cache',
            'phrase' => 'Adicionar um sistema de cache para melhorar o desempenho e a escalabilidade da aplicação',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Configuração de servidor de produção',
            'phrase' => 'Configurar o servidor de produção para garantir alta disponibilidade e segurança',
            'created_by' => rand(1, 5),
        ]);




        ProjectTask::create([
            'project_id' => 4,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Desenvolvimento de campanha publicitária',
            'phrase' => 'Criar estratégias de marketing para promover o produto/serviço',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 4,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Análise de mercado e concorrência',
            'phrase' => 'Realizar estudo de mercado para identificar oportunidades e ameaças',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 4,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Desenvolvimento de materiais de vendas',
            'phrase' => 'Elaborar apresentações, folhetos e outras ferramentas de vendas',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 6,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Treinamento da equipe de vendas',
            'phrase' => 'Realizar treinamentos para melhorar habilidades de vendas e conhecimento do produto',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 5,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Gestão de redes sociais',
            'phrase' => 'Gerenciar perfis em redes sociais para aumentar a visibilidade da marca',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 5,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Desenvolvimento de parcerias estratégicas',
            'phrase' => 'Identificar e estabelecer parcerias com outras empresas para aumentar as vendas',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 5,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Otimização de funil de vendas',
            'phrase' => 'Analisar e otimizar o funil de vendas para aumentar a conversão de leads em clientes',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 6,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Participação em eventos do setor',
            'phrase' => 'Representar a empresa em eventos do setor para criar networking e gerar leads',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Análise de métricas de marketing',
            'phrase' => 'Analisar métricas de marketing para avaliar o desempenho das campanhas',
            'created_by' => rand(1, 5),
        ]);
        
        ProjectTask::create([
            'project_id' => 2,
            'status_id' => rand(1, 3),
            'designated_id' => rand(1, 5),
            'checked' => rand(0, 1),
            'priority' => rand(0, 3),
            'date' => now(),
            'name' => 'Desenvolvimento de estratégia de pricing',
            'phrase' => 'Desenvolver uma estratégia de precificação competitiva para maximizar lucros',
            'created_by' => rand(1, 5),
        ]);
        
        

        \App\Models\User::factory(10)->create();
    }
}
