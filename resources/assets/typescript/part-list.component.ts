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
    selector: 'part-list',
    templateUrl: 'templates/mission-list.component.html',
    providers: [MissionService],
    directives: [PaginationComponent]
})

export class PartListComponent { }
