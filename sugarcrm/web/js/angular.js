angular.module('modulesList', [])
    .controller('ModuleController', function ($scope) {
        $scope.moduleVardefs = moduleVardefs;

        $scope.showModuleDetails = function (moduleName) {
            // Logic to display details based on the selected module
            // Use $scope.shownCase and update it with module-specific details
        };
    });
