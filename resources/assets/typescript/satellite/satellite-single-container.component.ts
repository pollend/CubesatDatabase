// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';


import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';



@Component({
  selector: 'satellite-single-container-component',
  templateUrl: 'templates/satellite-single-container.component.html'
})
export class SatelliteSingleContainerComponent implements OnInit{
	ngOnInit() {
	}
}


