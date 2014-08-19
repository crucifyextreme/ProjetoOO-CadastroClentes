appClient
    .controller('ctrlClient',
        [
            '$scope','modelClient','$routeParams','$timeout','$window','$location',
            function($scope,modelClient, $routeParams,$timeout,$window,$location) {

                $scope.loadClientes = function() {

                    modelClient.consulta_dados()
                        .success(function(data) {

                            $scope.clientes = data;
                        })

                },
                /* Open modal details clients */
                $scope.detailClients = function(id_cliente) {
                    modelClient.consulta_dados()
                        .success(function(data) {

                            for(var i=0; i < Object.keys(data).length; i++) {
                                if(data[i].id == id_cliente) {
                                    $scope.nome_cliente = data[i].nome;
                                    $scope.cpf = data[i].cpf;
                                    $scope.endereco = data[i].endereco;
                                    $scope.cidade = data[i].cidade;
                                }
                            }
                            /* Open modal details */
                            $('#modalDetailsClients').modal('toggle');
                        })

                }
            }
        ]

    );

