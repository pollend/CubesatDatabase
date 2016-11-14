//Modules
import { NgModule }           from '@angular/core';
import {SatelliteRoutingModule} from "./satellite-routing.module";

// components
import {SatelliteComponent} from "./satellite.component"
import { SatelliteListComponent } from "./satellite-list.component"


import {SatelliteService} from "./../services/satellite-service";

@NgModule({
  imports:      [ SatelliteRoutingModule ],
  declarations: [ 
    SatelliteListComponent,
    SatelliteComponent
  ],
  providers:    [SatelliteService ]
})
export class SatelliteModule { }
