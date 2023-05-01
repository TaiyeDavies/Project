
import React, { useState, useEffect } from 'react';
import './index.css'
import data from './data.json'

console.log("Hi");
export default function Tree() {
    useEffect(() => {
        // Update the document title using the browser API
        document.title = `HI`;
    });

    return (
        <div class="tree">
            <div>mammals<br /></div>
            <div id="cheetah">cheetah<br /></div>
            <div id="bear">bear<br /></div>
            <div id="lion">lion<br /></div>
            <div id="dog">dog<br /></div>
            <div id="elephant">elephant<br /></div>
            <div id="ape">ape<br /></div>
        </div>

    );
}



