import {Component} from 'angular2/core';

@Component({
    selector: 'cube-pagination',
    templateUrl: 'templates/login.component.html'
})


export class PaginationComponent { 
	public per_page = 0;
	public total_number_of_entries = 0;
}
