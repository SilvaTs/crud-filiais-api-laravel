<?php

$this->get('filiais','Api\FiliaisController@index');
$this->post('filiais','Api\FiliaisController@cadastrarFilial');
$this->put('filiais/{id}','Api\FiliaisController@updateFilial');
$this->delete('filiais/{id}','Api\FiliaisController@deleteFilial');
$this->get('filiais/{id}','Api\FiliaisController@detalhesFilial');
$this->post('login','Api\FiliaisController@verificaUsuario');
