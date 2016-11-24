import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import {  ReactiveFormsModule }   from '@angular/forms';

import {MissionListComponent} from "./mission-list.component";
import {MissionComponent} from './mission.component';

import {MissionService} from "../services/mission-service";
import {SatelliteService} from "../services/satellite-service";


import {ShareModule} from "./../share/share.module";


import {MissionRoutingModule} from "./mission-routing.module";

@NgModule({
  imports:      [
  	CommonModule,
	  MissionRoutingModule,
	  ReactiveFormsModule,
    ShareModule
  ],
  declarations: [
	  MissionListComponent,
	  MissionComponent
   ],
  providers:    [
    MissionService,
    SatelliteService
  ]
})
export class MissionModule { }
