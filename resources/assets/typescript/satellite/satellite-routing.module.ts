import { NgModule }            from '@angular/core';
import { RouterModule }        from '@angular/router';
import { SatelliteComponent } from "./satellite.component"
import { SatelliteListComponent } from "./satellite-list.component"
import { SatelliteSingleComponent } from "./satellite-single.component";
import { SatelliteSingleContainerComponent } from "./satellite-single-container.component";
import { SatelliteSingleEditComponent } from "./satellite-single-edit.component";



@NgModule({
  imports: [RouterModule.forChild([
	{path:'',component:SatelliteComponent,
		children: [
			{ path:'' , component: SatelliteListComponent },
			{path:':id', component: SatelliteSingleContainerComponent,
				children:[
					{ path:'' , component: SatelliteSingleComponent },
					{ path:'edit' , component: SatelliteSingleEditComponent  }
				]
			}
			
		]
	}

  ])],
  exports: [RouterModule]
})
export class SatelliteRoutingModule {}

