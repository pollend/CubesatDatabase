// Exact copy except import UserService from core
import {OnInit, Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';


import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';



@Component({
  selector: 'satellite-single-edit-component',
  templateUrl: 'templates/satellite-single-edit.component.html'
})
export class SatelliteSingleEditComponent implements OnInit{


	constructor(){
		
	}

	ngOnInit() {

	}
}


