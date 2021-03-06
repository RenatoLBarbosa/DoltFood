<?php



Route:: get('/login',['uses'=>'LoginController@form']);
Route:: post('/login_auth',['uses'=>'LoginController@login']);
Route:: get('/login/novo',['uses'=>'LoginController@novo']);
Route:: post('/login/registro',['uses'=>'LoginController@registro']);

Route:: get('/logout',['uses'=>'LoginController@LogOut']);

Route:: get('/',['uses'=>'ControllerPedidos@novo_pedido']);
Route:: get('/produtos/mostra/{id}',['uses'=>'Controller@mostra']);
Route:: get('/produtos/remove/{id}',['uses'=>'Controller@remove']);
Route:: post('/pedidos/gerarQR',['uses'=>'ControllerPedidos@gerarQR']);
Route:: get('/produtos/novo',['uses'=>'Controller@novo']);
Route:: post('/produtos/adiciona',['uses'=>'Controller@adiciona']);
Route:: get('/pedido/lista_vendedor/{pedido_id}',['uses'=>'ControllerPedidos@lista_pedido_vendedor']);
Route:: get('/pedido/finalizar_vendedor/{pedido_id}',['uses'=>'ControllerPedidos@finaliza_vendedor']);
Route:: get('/pedidos/finalizar',['uses'=>'ControllerPedidos@finalizar']);


Route:: get('/ingrediente/',['uses'=>'ControllerIngrediente@listagem']);
Route:: get('/ingrediente/novo',['uses'=>'ControllerIngrediente@novo']);
Route:: post('/ingrediente/adiciona',['uses'=>'ControllerIngrediente@adiciona']);
Route:: get('/ingrediente/excluir/{id}',['uses'=>'ControllerIngrediente@excluir']);


Route:: get('/cardapio/',['uses'=>'ControllerCardapio@listagem']);
Route:: get('/cardapio/novo',['uses'=>'ControllerCardapio@novo']);
Route:: post('/cardapio/adiciona',['uses'=>'ControllerCardapio@adiciona']);
Route:: get('/cardapio/monta/{id}',['uses'=>'ControllerCardapio@monta']);
Route:: post('/cardapio/monta_cardapio',['uses'=>'ControllerCardapio@monta_cardapio']);
Route:: get('/cardapio/excluir/{id}&{id2}',['uses'=>'ControllerCardapio@excluir']);



Route:: get('/pedido/lista/',['uses'=>'ControllerPedidos@lista_cardapio']);
Route:: get('/pedido/novo/{id}',['uses'=>'ControllerPedidos@novo_pedido']);
Route:: get('/pedido/excluir/{id}&{id2}&{id3}',['uses'=>'ControllerPedidos@excluir']);
Route:: get('/pedido/lista_ingredientes/{id}&{id2}',['uses'=>'ControllerPedidos@lista_ingredientes']);
Route:: get('/pedido/addCardapio/{id}&{id2}',['uses'=>'ControllerPedidos@addCardapio']);
Route:: get('/pedido/salvar/{pedido_id}',['uses'=>'ControllerPedidos@salva_pedido']);
Route:: get('/pedido/update/{pedido}&{cardapio}',['uses'=>'ControllerPedidos@update']);

Route:: get('/grafico/lista/',['uses'=>'ControllerGraficos@lista_graficos']);

Route:: get('/pedidostela/lista/',['uses'=>'ControllerPedidosTela@lista_pedidostela']);
Route:: post('/pedidostela/finalizar_cardapio/',['uses'=>'ControllerPedidosTela@finalizar_cardapio']);

Route:: get('/tipo_cardapio/',['uses'=>'ControllerTipoCardapio@listagem']);
Route:: get('/tipo_cardapio/novo',['uses'=>'ControllerTipoCardapio@novo']);
Route:: post('/tipo_cardapio/adiciona',['uses'=>'ControllerTipoCardapio@adiciona']);

Route:: get('/tipo_ingrediente/',['uses'=>'ControllerTipoIngrediente@listagem']);
Route:: get('/tipo_ingrediente/novo',['uses'=>'ControllerTipoIngrediente@novo']);
Route:: post('/tipo_ingrediente/adiciona',['uses'=>'ControllerTipoIngrediente@adiciona']);
