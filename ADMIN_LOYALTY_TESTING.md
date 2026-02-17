## 🧪 Guia de Teste Manual - Admin Loyalty Panel

Este guia ajuda a testar manualmente todas as funcionalidades do painel admin de loyalidade.

---

## 📋 Checklist de Testes

### 1️⃣ Dashboard Admin (`/admin/loyalty/dashboard`)

- [ ] Página carrega sem erros
- [ ] Mostra 4 cards com estatísticas:
  - [ ] Total de Usuários
  - [ ] Pontos Distribuídos
  - [ ] Tiers Ativos
  - [ ] Badges Criadas
- [ ] Top 10 Usuários com mais pontos aparece
- [ ] Transações recentes aparecem (últimas 5)
- [ ] Atalhos para Tiers, Badges e Pontos funcionam

---

### 2️⃣ Gerenciamento de Tiers

#### Listar Tiers (`/admin/loyalty/tiers`)
- [ ] Página carrega
- [ ] 4 tiers aparecem na tabela (Bronze, Prata, Ouro, Platina)
- [ ] Colunas mostram: Icon, Nome, Min Pontos, Desconto, Usuários, Benefícios
- [ ] Botões de Editar/Deletar aparecem para cada tier
- [ ] Botão "Novo Tier" funciona

#### Criar Novo Tier (`/admin/loyalty/tiers/create`)
- [ ] Formulário carrega corretamente
- [ ] Campos obrigatórios: Nome, Pontos Mínimos, Desconto, Cor
- [ ] Color picker funciona (clique em cor)
- [ ] Campo de benefícios aceita JSON
- [ ] **Teste 1:** Submeter com campos vazios → mostra erro
- [ ] **Teste 2:** Submeter com dados válidos:
  - Nome: "Diamond"
  - Min Pontos: 10000
  - Desconto: 25%
  - Cor: #FFD700
  - Benefícios: `{"frete_gratis": true, "prioridade": true}`
- [ ] Tier é criado e redireciona para list com mensagem "Tier criado com sucesso!"

#### Editar Tier (`/admin/loyalty/tiers/{id}/edit`)
- [ ] Formulário pré-preenchido com dados do tier
- [ ] Mostra número de usuários neste tier
- [ ] **Teste:** Editar nome e submeter
- [ ] Mudança é salva e reflete na lista

#### Deletar Tier
- [ ] Clique em deletar na lista → pede confirmação
- [ ] Confirmar → tier é deletado
- [ ] Redireciona com mensagem de sucesso

---

### 3️⃣ Gerenciamento de Badges

#### Listar Badges (`/admin/loyalty/badges`)
- [ ] Página carrega
- [ ] 7 badges aparecem na tabela
- [ ] Colunas: Icon, Nome, Descrição, Condição, Usuários, Status
- [ ] Status mostra "Ativo" ou "Inativo" como badge
- [ ] Botões de Editar/Deletar funcionam
- [ ] Botão "Nova Badge" funciona

#### Criar Nova Badge (`/admin/loyalty/badges/create`)
- [ ] Formulário carrega
- [ ] **Teste 1 - Limite de Pontos:**
  - Nome: "Pontos Avançado"
  - Descrição: "Conquistou 2000 pontos!"
  - Icon: 💰
  - Tipo: "Limite de Pontos"
  - Pontos Necessários: 2000
  - Status: Ativa
  - Submeter → Criar badge
- [ ] **Teste 2 - Primeira Compra:**
  - Nome: "Primeiro Passo"
  - Tipo: "Primeira Compra"
  - Submeter → Criar badge
- [ ] **Teste 3 - Número de Compras:**
  - Nome: "Comprador Premium"
  - Tipo: "Número de Compras"
  - Compras: 10
  - Submeter → Criar badge
- [ ] **Teste 4 - Atingir Tier:**
  - Nome: "Ouro Conquistado"
  - Tipo: "Atingir Tier"
  - Tier: "Ouro"
  - Submeter → Criar badge
- [ ] Todas badges aparecem na lista

#### Editar Badge
- [ ] Clique em Editar em uma badge
- [ ] Form pré-preenchido
- [ ] Altere um campo (ex: mudar tipo de condição)
- [ ] Submeter → badge é atualizada
- [ ] Mostra contagem de usuários com a badge

#### Deletar Badge
- [ ] Clique em deletar
- [ ] Confirmar → badge deletada
- [ ] Desaparece da lista

---

### 4️⃣ Gerenciamento de Pontos

#### Gerenciar Pontos (`/admin/loyalty/points/manage`)
- [ ] Página carrega com lista de usuários
- [ ] **Teste de Filtros:**
  - [ ] Buscar por nome: Digite nome, busque
  - [ ] Buscar por email: Digite email, busque
  - [ ] Filtrar por tier: Selecione "Ouro", busque
- [ ] Mostra: Nome, Email, Pontos (badge azul), Tier (badge colorida), Compras, Badges
- [ ] **Teste de Ajuste de Pontos:**
  - [ ] Clique em "Ajustar" em um usuário
  - [ ] Modal abre com dados do usuário
  - [ ] Mostra pontos atuais
  - [ ] Preencha:
    - Quantidade: 100 (adiciona)
    - Motivo: "Bônus Manual"
    - Descrição: "Bônus por feedback"
  - [ ] Clique "Confirmar Ajuste"
  - [ ] Pontos do usuário aumentam de 100 em 100
  - [ ] **Teste Negativo:**
    - Clique novamente em "Ajustar"
    - Quantidade: -50 (remove)
    - Motivo: "Adjustment"
    - Confirmar → pontos diminuem

#### Visualizar Transações (`/admin/loyalty/points/transactions`)
- [ ] Página carrega com histórico de transações
- [ ] **Testes de Filtro:**
  - [ ] Filtrar por Tipo: "Compra" → mostra apenas compras
  - [ ] Filtrar por Usuário: Digite nome/email
  - [ ] Filtrar por Data: Selecione intervalo
  - [ ] Combinação: Tipo "Bônus" + Usuário "João" + Data de hoje
- [ ] Mostra 4 cards com estatísticas:
  - [ ] Total de Transações
  - [ ] Pontos Adicionados (positivos, verde)
  - [ ] Pontos Removidos (negativos, vermelho)
  - [ ] Saldo Líquido
- [ ] Tabela mostra:
  - [ ] Data/Hora
  - [ ] Usuário + Email
  - [ ] Tipo (com badge de cor)
  - [ ] Quantidade (com cor: verde se +, vermelho se -)
  - [ ] Descrição
  - [ ] Referência (ID do pedido se houver)
- [ ] Paginação funciona (20 transações por página)

---

### 5️⃣ Testes de Integração

#### Fluxo Completo
- [ ] **Cenário 1: Novo usuário registra**
  - [ ] Registrar novo usuário
  - [ ] Ir para `/admin/loyalty/dashboard`
  - [ ] Novos números devem estar atualizados
  - [ ] Novo usuário deve aparecer em "Top Usuários" (se tiver pontos)

- [ ] **Cenário 2: Criar pedido → pontos automáticos**
  - [ ] Criar pedido (simular ou via admin se possível)
  - [ ] Ir para `/admin/loyalty/points/transactions`
  - [ ] Transação "Compra" deve aparecer
  - [ ] Pontos do usuário devem aumentar no `/admin/loyalty/points/manage`

- [ ] **Cenário 3: Pontos → Tier automático**
  - [ ] Adicionar 500 pontos a um usuário
  - [ ] Ir para `/admin/loyalty/points/manage`
  - [ ] Usuário deve ter sido promovido ao tier "Prata" (se tinha 0 pontos)

- [ ] **Cenário 4: Badge desbloqueia**
  - [ ] Criar badge de "100 pontos"
  - [ ] Adicionar 100 pontos a um usuário
  - [ ] Badge deve desbloquear automaticamente (se configurado)

---

### 6️⃣ Testes de Erro e Validação

- [ ] **Criar Tier:** Submeter com Desconto = 150% → erro "Deve ser entre 0-100"
- [ ] **Criar Badge:** Submeter sem nome → erro obrigatório
- [ ] **Ajustar Pontos:** Submeter sem motivo → erro obrigatório
- [ ] **Deletar com confirmação:** Clique Deletar → cancele no diálogo → não deleta
- [ ] **Autenticação:** Tente acessar `/admin/loyalty/dashboard` sem login → redireciona
- [ ] **CSRF:** Desabilite CSRF token e tente POST → erro 419

---

### 7️⃣ Testes de UI/UX

- [ ] Todas as páginas são responsivas (teste em mobile via DevTools)
- [ ] Forms mostram placeholders úteis
- [ ] Botões têm ícones apropriados
- [ ] Cores são consistentes (Bootstrap theme)
- [ ] Tabelas têm alternância de cores (zebra striping)
- [ ] Modals funcionam sem bugs
- [ ] Mensagens de sucesso/erro aparecem
- [ ] Paginação é clara
- [ ] Busca funciona em tempo real (se implementado)
- [ ] Dropdowns/Selects funcionam

---

### 8️⃣ Testes de Performance

- [ ] Dashboard carrega em < 2 segundos
- [ ] Lista de tiers carrega em < 1 segundo (mesmo com 100 tiers)
- [ ] Lista de transações carrega em < 2 segundos (mesmo com 1000+ transações)
- [ ] Editar/Deletar não demora > 1 segundo
- [ ] Não há console errors (abra DevTools F12 → Console)

---

## 📝 Casos de Teste Avançados

### Cenário A: Usuário Atingindo Múltiplas Badges
1. Crie badge "50 Pontos" (tipo: limite)
2. Crie badge "100 Pontos" (tipo: limite)
3. Crie badge "Primeira Compra" (tipo: primeira compra)
4. Adicione 100 pontos a usuário
5. **Esperado:** Usuário ganha badges de 50, 100, e Primeira Compra
6. Verifique em `/admin/loyalty/points/manage` → coluna Badges

### Cenário B: Tier Progresso
1. Verifique usuário com 400 pontos (Bronze)
2. Adicione 100 pontos (fica 500) → deve virar Prata
3. Adicione 500 mais (fica 1000) → deve virar Ouro
4. Adicione 4000 mais (fica 5000) → deve virar Platina
5. Verifique mudanças em `/admin/loyalty/points/manage`

### Cenário C: Remoção de Pontos
1. Usuário com 500 pontos (Prata)
2. Remova 100 pontos (fica 400) → deve descer para Bronze
3. Remova todos os 400 (fica 0) → sem tier
4. **Esperado:** Transação negativa aparece com motivo "Redemption"

---

## 🐛 Como Reportar Bugs

Se encontrar algum problema:

1. **Anote:**
   - Página onde ocorreu
   - Exato passos para reproduzir
   - Comportamento esperado vs real
   - Screenshot/vídeo se possível

2. **Exemplos:**
   - "Em `/admin/loyalty/tiers/create`, ao clicar na color picker não abre"
   - "Badge não aparece na lista após criar"
   - "Ajuste de pontos nega sem mensagem de erro"

3. **Verifique Console (F12 → Console):**
   - Se há erros JavaScript
   - Se há requests falhando (Network tab)

---

## ✅ Checklist Final

- [ ] Todos os 5 testes de "UI/UX" passaram
- [ ] Todos os 2 cenários avançados funcionaram
- [ ] Nenhum erro no console (F12)
- [ ] Responsividade OK
- [ ] Performance OK

**Se TODOS os itens estão marcados ✅, o painel admin está pronto para uso em produção!**

---

## 🚀 Próximos Passos (Opcional)

- [ ] Adicionar role-based access (admin/gerenciador)
- [ ] Implementar testes automatizados
- [ ] Adicionar gráficos ao dashboard
- [ ] Agendamento de relatórios por email
- [ ] Integração com sistema de notificações
- [ ] Backup/restore de dados
