angular.module('starter.controllers', [])
    .controller('LoginCtrl', ['$scope', '$http', '$state', 'OAuth', 'OAuthToken',
        function($scope, $http, $state, OAuth, OAuthToken){
            $scope.login = function(data){

                OAuth.getAccessToken(data).then(function(data){
                    $state.go('tabs.orders');
                    //console.log(OAuthToken.getToken());
                }, function(data){
                    $scope.error_login = "Usuário ou senha inválidos.";
                });

                /*
                var dataPost = {
                    grant_type    : 'password',
                    client_id     : 'testclient',
                    client_secret : 'testpass',
                    username      : data.username,
                    password      : data.password

                };

                $http.post('http://localhost:8888/oauth', dataPost)
                    .success(function(data){
                        localStorage.setItem('order_token', data.access_token);
                        localStorage.setItem('order_refresh_token', data.refresh_token);

                        $state.go('tabs.orders');
                    })
                    .error(function(error){
                        $scope.error_login = "Usuário ou senha inválidos.";
                    });
                */
            }
        }
    ])
    .controller('OrdersCtrl',['$scope', '$http', '$state',
        function($scope, $http, $state){

            $scope.getOrders = function(){
                $http.get('http://localhost:8888/orders').then(
                    function(data){
                    $scope.orders = data.data._embedded.orders;
                    //console.log(data.data._embedded.orders);
                });
            }

            $scope.doRefresh = function(){
                $scope.getOrders();
                $scope.$broadcast('scroll.refreshComplete');
            }

        $scope.getOrders();

    }
    ])