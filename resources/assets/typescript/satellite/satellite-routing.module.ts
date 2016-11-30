import { NgModule }            from '@angular/core';
import { RouterModule }        from '@angular/router';
import { SatelliteComponent } from "./satellite.component"
import { SatelliteListComponent } from "./satellite-list.component"
import { SatelliteSingleComponent } from "./satellite-single.component";



@NgModule({
  imports: [RouterModule.forChild([
	{path:'',component:SatelliteComponent,
		children: [
			{ path:'' , component: SatelliteListComponent },
			{ path:':id' , component: SatelliteSingleComponent }
			
		]
	}

  ])],
  exports: [RouterModule]
})
export class SatelliteRoutingModule {}

