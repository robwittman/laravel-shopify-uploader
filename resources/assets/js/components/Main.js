import React, { Component } from 'react'
import ReactDOM from 'react-dom'

import {
    BrowserRouter as Router,
    Route,
    Link
} from 'react-router-dom'

import PrimaryLayout from '../layouts/PrimaryLayout'

const App = () => (
  <Router basename='/app'>
    <div>
      <PrimaryLayout />
    </div>
  </Router>
)

ReactDOM.render(<App />, document.getElementById('root'))
