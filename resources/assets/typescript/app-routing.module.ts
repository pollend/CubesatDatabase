import { NgModule }             from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {HomeComponent} from './home.component';
import {LoginComponent} from './login.component';
import {RegisterComponent} from './register.component';



export const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full'},
  { path: 'home', component: HomeComponent},
  { path: 'login', component: LoginComponent},
  { path: 'register', component: RegisterComponent},
  { path: 'account' , loadChildren: './account/account.module#UserModule' },
  { path: 'satellite' , loadChildren: './satellite/satellite.module#SatelliteModule' },
  { path: 'mission' , loadChildren: './mission/mission.module#MissionModule' },
  { path: 'vendor' , loadChildren: './vendor/vendor.module#VendorModule' },
  { path: 'component' , loadChildren: './component/component.module#ComponentModule' },
  { path: 'profile', loadChildren: './profile/profile.module#ProfileModule'}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {}

