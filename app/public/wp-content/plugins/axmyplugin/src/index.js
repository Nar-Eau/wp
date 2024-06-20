import domReady from '@wordpress/dom-ready';
import {createRoot, useState, useEffect} from '@wordpress/element';
import  apiFetch from '@wordpress/api-fetch';

import {__} from '@wordpress/i18n';
import { Panel, PanelBody, PanelRow, TextareaControl, ToggleControl, FontSizePicker, Button, __experimentalHeading as Heading, ColorPicker} from '@wordpress/components';

const SettingTitle = () => {
    return (
        <Heading level={1}>
            { __('Top Bar Settings', 'top-bar') }
        </Heading>
    )
}

const SaveButton = ( {onClick}) => {
    return (
        <Button variant="primary" onClick={onClick} __next40pxDefaultSize>
            {__('Save', 'top-bar')}
        </Button>
    );
}

const SizeControl = ({value, onChange}) => {
    return (
        <FontSizePicker fontSizes={[
            {
                name: __('Small', 'top-bar'),
                size: 'small',
                slug: 'small',
            },
            {
                name: __('Medium', 'top-bar'),
                size:'medium',
                slug:'medium',
            },
            {
                name: __('Large', 'top-bar'),
                size: 'large',
                slug: 'large',
            },
            {
                name: __('Extra Large', 'top-bar'),
                size: 'extra-large',
                slug: 'extra-large',
            }
        ]}
        value={value}
        onChange={onChange}
        disableCustomFontSize={true}
        __nextHasNoMarginBottom
        />
    );
};

const DisplayControl = ({value, onChange}) => {
    return (
        <ToggleControl
            label={__('Display', 'top-bar')}
            checked={value}
            onChange={onChange}
            __nextHasNoMarginBottom
        />
    );
};

const MessageControl = ({value, onChange}) => {
    return (
        <TextareaControl
            label={__('Message', 'top-bar')}
            value={value}
            onChange={onChange}
            __nextHasNoMarginBottom
        />
    );
};

const ColorControl = ({value, onChange}) => {
    return (
        <ColorPicker
            color={value}
            onChange={onChange}
        />
    );
};

const SettingsPage = () => {

    const { message, setMessage, display, setDisplay, size, setSize, backgroundColor, setBackgroundColor, textColor, setTextColor, saveSettings } = useSettings();

    return (
        <>
            <SettingTitle />
            <Panel>
                <PanelBody>
                    <PanelRow>
                        <MessageControl 
                            value={ message } 
                            onChange={ ( value ) => setMessage(value) } 
                        />
                    </PanelRow>
                    <PanelRow>
                        <DisplayControl 
                            value={ display } 
                            onChange={ ( value ) => setDisplay(value) } 
                        />
                    </PanelRow>
                </PanelBody>
                <PanelBody
                    title={__('Appearence', 'top-bar')}
                    initialOpen={false}
                >
                    <PanelRow>
                        <SizeControl 
                            value={ size } 
                            onChange={ ( value ) => setSize(value) } 
                        />
                    </PanelRow>
                    <PanelRow>
                        <div>
                            <p>Couleur du fond</p>
                            <ColorControl value={ backgroundColor } 
                                        onChange={ ( color ) => setBackgroundColor(color) }
                                    />
                        </div>
                        <div>
                            <p>Couleur du texte</p>
                            <ColorControl value={ textColor } 
                                onChange={ ( color ) => setTextColor(color) }
                            />
                        </div>
                    </PanelRow>
                </PanelBody>
            </Panel>
            <SaveButton onClick ={ saveSettings } />
        </>
    );
};

const useSettings = () => {
    const [message, setMessage] = useState('Hello, World!');
    const [ display, setDisplay] = useState(true);
    const [ size, setSize] = useState('medium');
    const [ backgroundColor, setBackgroundColor] = useState('#ffffff');
    const [ textColor, setTextColor] = useState('#000000');

    useEffect(() => {
        apiFetch({path: '/wp/v2/settings'}).then( (settings) => {
            setMessage(settings.top_bar.message);
            setDisplay(settings.top_bar.display);
            setSize(settings.top_bar.size);
            setBackgroundColor(settings.top_bar.backgroundColor);
            setTextColor(settings.top_bar.textColor);

        });
    }, []);

    const saveSettings = () => {
        apiFetch({
            path: '/wp/v2/settings',
            method: 'POST',
            data: {
                top_bar: {
                    message,
                    display,
                    size,
                    backgroundColor,
                    textColor,
                },
            },
        });
    };

    return { message, setMessage, display, setDisplay, size, setSize, backgroundColor, setBackgroundColor, textColor, setTextColor, saveSettings };
}


domReady( () => {
    const root = createRoot(
        document.getElementById('top-bar-settings')
    );

    root.render (<SettingsPage/>);
})