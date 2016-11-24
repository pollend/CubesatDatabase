import { NgModule }            from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {ComponentComponent} from './component.component';
import {ComponentListComponent} from './component-list.component';


export const routes: Routes = [
	{path:'',component:ComponentComponent,
		children: [
			{ path:'' , component: ComponentListComponent }
		]
	}
];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ComponentRoutingModule {}

