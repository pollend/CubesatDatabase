//angular 2 core
import {Component, OnInit} from 'angular2/core';
import {Router, RouteParams} from 'angular2/router';

//models
import {Pagination} from "./models/pagination";
import {Mission} from "./models/mission";

//component
import {PaginationComponent} from './pagination.component';

//services
import {MissionService} from "./services/mission-service";


@Component({
    selector: 'mission-list',
    templateUrl: 'templates/mission-list.component.html',
    providers: [MissionService],
    directives: [PaginationComponent]
})


export class MissionListComponent implements OnInit{
	pageination: Pagination<Mission>;
	errorMessage: string;
	private page: number = 1;

	constructor(private _mission_service: MissionService, private _route: Router, routeParams : RouteParams) { 
		this.pageination = null;
		this.page = +routeParams.get('page');
	}

	ngOnInit()
	{ 
		this._mission_service.getMissions(this.page).subscribe(
			missions => this.pageination = <Pagination<Mission>>missions,
			error => this.errorMessage = <any>error);
	}

	private onPageChange(page: number)
	{
		this.page = page;
		this.updateList();
	}

	private updateList()
	{
		this._route.navigate(['MissionList', { page: this.page }]);
	}

	private missionSelect(mission : Mission)
	{
		this._route.navigate(['MissionSingle', { id: mission.id }]);
	}

}
