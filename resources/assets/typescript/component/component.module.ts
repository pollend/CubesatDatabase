import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import {  ReactiveFormsModule }   from '@angular/forms';

import {ComponentRoutingModule} from './component-routing.module';

import { ComponentComponent } from './component.component';
import { ComponentListComponent } from './component-list.component';
import { ComponentGroupSearchComponent } from './component-group-search.component';
import { ComponentIconComponent } from './component-icon.component';

@NgModule({
  imports:      [
 	CommonModule,
	ComponentRoutingModule,
	ReactiveFormsModule
  ],
  declarations: [
	ComponentComponent,
	ComponentListComponent,
	ComponentGroupSearchComponent,
	ComponentIconComponent
  ],
  providers:    [  ]
})
export class ComponentModule { }
