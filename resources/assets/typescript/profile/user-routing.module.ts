import { NgModule }            from '@angular/core';
import { RouterModule }        from '@angular/router';


@NgModule({
  imports: [RouterModule.forChild([
  	//{path: '', component: }
  	//{ path: '', component: HomeComponent}
  	//{path: ':id', component: }
  ])],
  exports: [RouterModule]
})
export class UserRoutingModule {}

