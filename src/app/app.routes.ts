import { Routes } from '@angular/router';
import { ProfileComponent } from './profile/profile.component';
import { ProductsComponent } from './products/products.component';

export const routes: Routes = [
    { path: 'profile', component: ProfileComponent },
    { path: 'products', component: ProductsComponent }
];
