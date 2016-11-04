//angular 2 core
import {Component, OnInit} from 'angular2/core';
import {Router, RouteParams} from 'angular2/router';

//models
import {Pagination} from "./models/pagination";
import {SatComponent} from "./models/sat_component";

//component
import {PaginationComponent} from './pagination.component';

//services
import {ComponentService} from "./services/component-service";

@Component({
    selector: 'component-list',
    templateUrl: 'templates/component-list.component.html',
    providers: [ComponentService],
    directives: [PaginationComponent]
})

export class ComponentListComponent { 

	pagination: Pagination<SatComponent>;
	errorMessage: string;
	private page: number = 0;

	constructor(private _component_service: ComponentService, private _route: Router, routeParams: RouteParams) {
		this.pagination = null;
		this.page = +routeParams.get('page');
	}

	ngOnInit() {
		//retrieve satellites
		this._component_service.getComponent(this.page).subscribe(
			sats => this.pagination = <Pagination<SatComponent>>sats,
			error => this.errorMessage = <any>error);
	}

	private onPageChange(page: number) {
		this.page = page;
		this.updateList();
	}

	private updateList() {
		this._route.navigate(['ComponentList', { page: this.page }]);
	}

	private selectComponent(component : SatComponent)
	{
		this._route.navigate(['ComponentSingle', { id: component.id }]);
	}
}
