
@extends('site.layout')


@section('content_out')
<div class="jumbotron text-white banner" style="border:none; background-color: #20bf6b; border-radius:0px">
        <div class="container">
          <h1 class="display-3">Conheça o Jardim dos Vagalumes!</h1>
          <p>Conheça como a gente funciona e o que podemos oferecer para sua família.</p>
          <p><a class="btn btn-outline-light btn-lg" href="{{route('localizacao')}}" role="button">Se ficou com dúvidas, fale com a gente »</a></p>
        </div>
      </div>
@endsection



@section('content')

<div class="row">
  <div class="col-sm-12">
      <div class="card">
          <div class="card-header">
              Nossa Estrutura
            </div>
          <div class="card-body">
              <img style="margin: 30px;" class="float-left" src="/images/house.svg" height="120" alt="">
            <p class="card-text text-sitio">
                Uma agradável e moderna infraestrutura te espera no Sítio Jardim dos Vagalumes, em Mogi das Cruzes. Cercada pelo verde, em uma área de 140 mil metros quadrados, no Bairro Cocuera, o sítio oferece a oportunidade de desfrutar momentos de descontração e bem-estar no campo, com excelentes opções de gastronomia e passeios pela propriedade. Dentre as opções estão três lagos para pesca, playground, horta, pomar, viveiro de árvores nativas e mudas de ervas, amplo estacionamento e restaurante.
            </p>
          </div>
    </div>
  </div>
</div>


<div class="row" style="margin-top:20px">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Funcionamento
              </div>
            <div class="card-body">
                <img style="margin: 30px;" class="float-right" src="/images/store.svg" height="110" alt="">
              <p class="card-text text-sitio">
                Estamos funcionando apenas com visita agendada. <a href="{{route('localizacao')}}">Agende agora</a> para o café da manhã, almoço e jantar. Temos cardápios que devem ser contratados antecipadamente ou cardápio personalizado, informando o número de pessoas e o horário de permanência. Bebidas serão vendidas separadamente em nosso bar. Para eventos, fazer reserva com dois dias de antecedência. Máximo de 60 pessoas.
              </p>
            </div>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top:20px">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  Restaurante
                </div>
              <div class="card-body">
                  <img style="margin: 30px;" class="float-left" src="/images/restaurant.svg" height="110" alt="">

                <p class="card-text text-sitio">
                  <strong>Cardápio variado:</strong> Com pratos típicos da roça (bife acebolado, espetinho de carne, feijoada, parmegiana) e gastronomia oriental (Sukiyaki, teppanyaki, teishoku de anchova, nishime, yakisoba e karaage).
                </p>

                <p class="card-text text-sitio">
                  <strong>Ingredientes frescos:</strong> Legumes, verduras e ervas que utilizamos da nossa horta (alface, rúcula, cebolinha, alho poro, salsão, pimentas, manjericão, alecrim, tomilho, orégano, erva doce, camomila, couve manteiga, brócolis, capuchinha, vagem, inhame, broto de bambu, mandioca,...) e dos produtores dos sítios vizinhos (Shimeji, Shitake, cogumelo porto belo, queijo, manteiga, tofu,...).
                </p>

                <p class="card-text text-sitio">
                  <strong>Opções de pratos vegetarianos e veganos:</strong> Macarrão artesanal, Yakisoba, Nishime, Sukiyaki, Salada de Bifun (macarrão de arroz), Harussame (macarrão de feijão verde), Sunomono (pepino em conserva), missoshiro e tofu fresco.
                </p>

                <p class="card-text text-sitio">
                  <strong>Opções fora do cardápio:</strong> Pratos que não constam em nosso cardápio, podem ser negociados e solicitados á nossa cozinha.
                </p>

                <p class="card-text text-sitio">
                  <strong>Sugestões do Chef:</strong> Em nosso site, são publicadas sugestões de cardápios do nosso Chef para o almoço de finais de semana (sexta, sábado e domingo). A reserva poderá ser confirmada até o dia anterior ao evento, via e-mail, Whatsapp, telefone ou no próprio Site. Caso não haja inscritos, o almoço será cancelado e a notificação não aparecerá mais na pagina de eventos.
                </p>

              </div>
        </div>
      </div>
    </div>



@endsection
