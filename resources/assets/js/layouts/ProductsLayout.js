import React from 'react'
import { Switch, Route } from 'react-router-dom'

import ListProductsPage from '../components/products/ListProductsPage.js';
import NewProductPage from '../components/products/NewProductPage.js';
import UpdateProductPage from '../components/products/UpdateProductPage.js';

const ProductsLayout = props => {
    return (
        <div>
            <Route path='/products' component={ListProductsPage} />
            <Route path='/products/:productId' component={UpdateProductPage} />
            <Route path='/products/new' component={NewProductPage} />
        </div>
    )
}

export default ProductsLayout;
