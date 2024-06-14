document.getElementById('top-bar-settings').style.display = '#0000FF';

import domReady from '@wordpress/dom-ready';
import {createRoot} from '@wordpress/element';

import {__} from '@wordpress/i18n';
import { Panel, PanelBody, PanelRow, Button } from '@wordpress/components';

const SettingsPage = () => {
    return (

        <Panel>
            <PanelBody>
                <PanelRow>
                    <div>Placeholder for message control</div>
                </PanelRow>
                <PanelRow>
                    <div>Placeholder for message control</div>
                </PanelRow>
            </PanelBody>
            <PanelBody
                title={__('Appearence', 'top-bar')}
                initialOpen={false}
            >
                <PanelRow>
                    <div>Placeholder for message control</div>
                </PanelRow>
            </PanelBody>
        </Panel>

    );
};


domReady( () => {
    const root = createRoot(
        document.getElementById('top-bar-settings')
    );

    root.render (<SettingsPage/>);
})