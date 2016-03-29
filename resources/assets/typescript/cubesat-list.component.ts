import {Component, OnInit} from 'angular2/core';

import {SatelliteService} from "./services/satellite-service";
import {Satellite} from "./models/satellite";
import {Pagination} from "./models/pagination";

import {PaginationComponent} from './pagination.component';

import {Router, RouteParams} from 'angular2/router';


@Component({
    selector: 'cubesat-list',
	templateUrl: 'templates/cubesat-list.component.html',
    providers: [SatelliteService],
    directives: [PaginationComponent]
})


export class CubesatListComponent implements OnInit { 

	sat_pageination: Pagination<Satellite>;
	errorMessage: string;
	private page: number = 0;

	constructor(private _satellite_service: SatelliteService, private _route: Router, routeParams : RouteParams) { 
		this.sat_pageination = null;
		this.page = +routeParams.get('page');
	}


	ngOnInit()
	{ 
	
		this.getSatellites(this.page); 
	}

	private onPageChange(page: number)
	{
		this.page = page;
		this.updateList();
	}

	private updateList()
	{
		this._route.navigate(['CubesatList', { page: this.page }]);
	}
	
	private getSatellites(page: number)
	{

		this._satellite_service.getSatellites(page).subscribe(
			sats => this.sat_pageination = sats,
			error => this.errorMessage = <any>error);
		
	}



}
