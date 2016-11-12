import { NgModule }            from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


/* App Root */
import { UserComponent }   from './user.component';

export const routes: Routes = [
	{path:'',component:UserComponent,
		children: [
		]
	}

];



@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class UserRoutingModule {}

