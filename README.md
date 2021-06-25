![Logo](https://github.com/vanmtv/jobzeira/blob/main/imagens/logo.svg)

**Projeto desenvolvido para a disciplina de IHC** 

**Descrição:** Sistema web de localização e contratação de profissionais liberais.

**Professor responsável:** Shigueo Tomomitsu

**Integrantes:** 
Mateus Mazzei, Vagner Ramos e Vanessa Regina

## Hospedagem Jobzeira [(Visite aqui)](https://jobzeira.herokuapp.com/)

# Briefing

 **Qual é o produto serviço a ser desenvolvido**
 Será desenvolvido uma aplicação WEB capaz de localizar , contatar e contratar profissionais liberais.
 
 **Como o descreveria**
 A aplicação irá permitir o anúncio de serviços efetuados por profissionais liberais. Disponibilizando um catálogo de serviços para qualquer usuário que deseja contratá lo.
 
 **Quais são os objetivos e visão do projeto**
O projeto tem o objetivo de desenvolver um novo produto para o catálogo de softwares da Empresa XDevs. Sendo o principal diferencial em seus produtos.
 
 **Quais são os usuários**
 
 Os usuários do Jobzeira dividem se em dois tipos:
 
 - **Profissionais** : profissionais liberais que irão anunciar os seus serviços na plataforma;
 -  **Clientes** : usuários maiores de 18 anos
   que irão contratar os serviços dos anunciantes

 
 **Quem são os principais competidores**
 
 - GetNinjas  
 - Workana
 - Revelo
 - 99 Freelas
 - 20pila

 **Equipe para o desenvolvimento**
  - Gerente do projeto : Vagner Ramos
 - Líder técnico : Mateus Mazzei
 - Consultor técnico: Vanessa Regina
 
 **Budget para o projeto & em quanto tempo o sistema deve ser implementado**
 
 O projeto deve ser totalmente implementado em 6 meses, totalizando em torno de 1000 horas trabalhadas . Com isto, foi calculado o budget inicial de R$73.000,00.
 
**Possui alguma restrição / condição que influencie no projeto**

O sistema deverá ser hospedado no servidor privado da XDevs

 **Possui alguma informação ou observação adicional que seja importante no projeto ? Requerimento específico?**

 Tanto a transação financeira para o pagamento quanto a prestação do serviço serão de responsabilidade única e exclusivamento do profissional anunciante . A equipe Jobzeira não se responsabiliza por quebras de contratos , cobranças não pagas ou quaisquer outros problemas oriundos da prestação do serviço.

## Kernel

![Kernel](https://i.imgur.com/eCcJLjL.png)

## Entidades

<table>
  <tr>
    <th>Serviços</th>
    <th>Clientes</th>
    <th>Profissionais</th>
  </tr>
  <tr>
    <td>Número</td>
    <td>Nome</td>
    <td>Nome</td>
  </tr>
  <tr>
    <td>Título</td>
    <td>CPF</td>
    <td>CPF/CNPJ</td>
  </tr>
  <tr>
    <td>Descrição do Anúncio</td>
    <td>Email</td>
    <td>Email</td>
  </tr>
  <tr>
    <td></td>
    <td>Senha</td>
    <td>Senha</td>
  </tr>
  <tr>
    <td></td>
    <td>Telefone</td>
    <td>Telefone</td>
  </tr>
  <tr>
    <td></td>
    <td>Endereço</td>
    <td>Endereço</td>
  </tr>
    <tr>
    <td></td>
    <td>Data de Nascimento</td>
    <td></td>
  </tr>
</table>


## Relacionamento
<table>
  <tr>
    <th>Contrato</th>
    <th>Anúncios</th>
  </tr>
  <tr>
    <td>Número</td>
    <td>CPF do Cliente</td>
  </tr>
  <tr>
    <td>CPF do Cliente</td>
    <td>Profissional</td>
  </tr>
  <tr>
    <td>CPF/CNPJ do Profissional</td>
    <td>Valor</td>
  </tr>
  <tr>
    <td>Descrição do Serviço</td>
    <td>Descrição</td>
  </tr>
  <tr>
    <td>Data de Contratação</td>
    <td>Imagens</td>
  </tr>
  <tr>
    <td>Número do anúncio associado</td>
    <td>Número</td>
  </tr>
</table>

## Funcionalidades
<table>
  <tr>
    <th>Número</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>RF1</td>
    <td>Usuários profissionais poderão publicar anúncios</td>
  </tr>
  <tr>
    <td>RF2</td>
    <td>O sistema deve permitir que os usuários profissionais gerenciem , somente,
seus próprios anúncios. Ações: editar, excluir, ler e criar.</td>
  </tr>
  <tr>
    <td>RF3</td>
    <td>O sistema deverá ter um catálogo em que os itens serão anúncios</td>
  </tr>
  <tr>
    <td>RF4</td>
    <td>Todos os usuários poderão ler os itens do catálogo.</td>
  </tr>
  <tr>
    <td>RF5</td>
    <td>Usuários clientes podem solicitar o serviço anunciado, gerando um contrato</td>
  </tr>
  <tr>
    <td>RF6</td>
    <td>Qualquer usuário maior de 18 anos pode se cadastrar no sistema como cliente</td>
  </tr>
    <tr>
    <td>RF7</td>
    <td>Qualquer usuário maior de 18 anos pode se cadastrar no sistema como cliente</td>
  </tr>
</table>


# Caso de Uso - Profissional

![Caso de Uso - Profissional](https://i.imgur.com/JkCpMRr.png)

# Caso de Uso - Cliente

![Caso de Uso - Cliente](https://i.imgur.com/vyAtKwu.png)


## Screenshots

## Home
![Home](https://i.imgur.com/4v6VdrV.png)

## Ver Serviços - Tela Profissional
![Profissional](https://i.imgur.com/eU9K03l.png)

## Cadastrar Serviços - Tela Profissional
![Servico](https://i.imgur.com/5SyQs5h.png)

