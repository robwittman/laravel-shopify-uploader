import React from 'react'
import { Switch, Route } from 'react-router-dom'
import Queue from '../components/Queue.js'
import Home from '../components/Home.js'
import Launch from '../components/Launch.js'

import TemplatesLayout from './TemplatesLayout.js'
import ProductsLayout from './ProductsLayout.js'

const PrimaryLayout = props => {
    return (
        <div>
            <main>
                <Switch>
                    <Route path="/" exact component={Home} />
                    <Route path="/queue" component={Queue} />
                    <Route path='/launch' component={Launch} />
                    <Route path='/templates' component={TemplatesLayout} />
                    <Route path='/products' component={ProductsLayout} />
                </Switch>
            </main>
        </div>
    )
}

export default PrimaryLayout;
