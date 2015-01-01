
var myApp = angular.module("myApp", ["firebase"]);


myApp.controller('MyController', ['$scope', '$firebase',
    function($scope, $firebase) {
      var ref = new Firebase("https://dollar-dogs.firebaseio.com/");
      var usersRef = ref.child("users");
      $scope.messages = $firebase(ref).$asArray();

      //ADD MESSAGE METHOD
      $scope.addMessage = function(e) {

        //LISTEN FOR RETURN KEY
        if (e.keyCode === 13 && $scope.msg) {
          //ALLOW CUSTOM OR ANONYMOUS USER NAMES
          var name = $scope.name || 'anonymous';
          var msg = $scope.msg;
          $scope.messages.$add({from: name, body: msg});
          //RESET MESSAGE
          $scope.msg = "";
        }
      }
    }
]);