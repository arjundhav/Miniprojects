var app=angular.module("simpleApp",[]);
app.controller("simpleController",function($scope)
{
   $scope.collection=[
	{name:"Arjun",age:22,city:"Nanded"},
	{name:"Yash",age:21,city:"Pune"}];
   $scope.addEntry=function()
{ 
	$scope.collection.push($scope.newData); 
	$scope.newData='';
};
});