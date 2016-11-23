import {PaginationComponent} from "./pagination.component";
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';


import {NgModule}       from '@angular/core';


@NgModule({
  imports:      [
	CommonModule,
	FormsModule
  ],
  declarations: [ PaginationComponent ],
  exports:      [ PaginationComponent ],
  providers:    [ ]
})
export class ShareModule {
}