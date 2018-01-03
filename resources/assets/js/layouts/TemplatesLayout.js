import React from 'react'
import { Switch, Route } from 'react-router-dom'

import ListTemplatesPage from '../components/templates/ListTemplatesPage.js'
import NewTemplatePage from '../components/templates/NewTemplatePage.js'
import UpdateTemplatePage from '../components/templates/UpdateTemplatePage.js'

const TemplatesLayout = props => {
    return (
        <div>
            <Route path='/templates' component={ListTemplatesPage} />
            <Route path='/templates/:templateId' component={UpdateTemplatePage} />
            <Route path='/templates/new' component={NewTemplatePage} />
        </div>
    )
}

export default TemplatesLayout;
