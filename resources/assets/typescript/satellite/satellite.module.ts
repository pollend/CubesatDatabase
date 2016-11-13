import { NgModule }           from '@angular/core';

import {SatelliteComponent} from "./satellite.component"
import {SatelliteRoutingModule} from "./satellite-routing.module";

import { SatelliteListComponent } from "./satellite-list.component"


@NgModule({
  imports:      [ SatelliteRoutingModule ],
  declarations: [ 
    SatelliteListComponent,
    SatelliteComponent
  ],
  providers:    [  ]
})
export class SatelliteModule { }
