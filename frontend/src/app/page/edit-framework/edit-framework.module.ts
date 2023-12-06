import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EditFrameworkPageRoutingModule } from './edit-framework-routing.module';

import { EditFrameworkPage } from './edit-framework.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    EditFrameworkPageRoutingModule
  ],
  declarations: [EditFrameworkPage]
})
export class EditFrameworkPageModule {}
