app.factory('satellite',function($http,API_URL)
{
	return {
        all: function(){
        	return $http.get(API_URL + "/satellite/");
        },
        single: function(id){
           return $http.get(API_URL + "/satellite/" + id);
        }  
    }    
});