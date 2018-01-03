import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {
    Page,
    Card,
    PageActions
} from '@shopify/polaris'

const Home = (props, context) => {
    return (
            <Page title="Home Page">
            <PageActions
                primaryAction={{
                    content: 'Create Product',
                    onAction: () => { props.history.push('/launch'); }
                }}
                secondaryActions={[
                    {
                        content: 'Manage Templates',
                        onAction: () => { props.history.push('/templates'); }
                    }, {
                        content: 'Manage Products',
                        onAction: () => { props.history.push('/products'); }
                    }, {
                        content: "View Queue",
                        onAction: () => { props.history.push('/queue'); }
                    }
                ]}
            />

        </Page>
    )
}

export default Home;
