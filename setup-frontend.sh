#!/bin/bash

if [[ -z "$SETUP" ]]; then
    tput setab 1
    echo "Please do not run this script individually"
    tput sgr0
    exit 0
fi

SPY_TOOL=`which spy`

if [[ `node -v | grep -E '^v[0-4]'` ]]; then
    labelText "Upgrade Node.js"
    sudo $NPM cache clean -f
    sudo $NPM install -g n
    sudo n stable

    successText "Node.js updated to version `node -v`"
    successText "NPM updated to version `$NPM -v`"
fi

if [[ $RESET == 1 ]] || [[ ! -f $SPY_TOOL ]]; then
    labelText "Install SPY tool globally"
    sudo $NPM install -g github:spryker/spy
    SPY_TOOL=`which spy`

    labelText "Test SPY tool"
    $SPY_TOOL test
fi

if [[ -f $SPY_TOOL ]]; then
    labelText "Install frontend core dependencies"
    $SPY_TOOL install
fi

labelText "Install frontend project dependencies"
$NPM install

if [[ -f $SPY_TOOL ]]; then
    labelText "Build and optimize assets"
    $SPY_TOOL build
fi

successText "Frontend setup completed successfully"
