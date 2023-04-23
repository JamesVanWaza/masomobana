<?php include_once 'nav.php';?>
<div id="content-wrapper" class="clearfix row">
    <div class="beta-ribbon-wrapper">
        <div class="beta-ribbon"><a href="http://learn.jquery.com/about/#beta">Beta</a>
    </div>
</div>
<div class="content-right twelve columns">
    <ul class="no-bullet">
        <li><a href="http://www.speckyboy.com/2013/12/18/50-javascript-tools-resources-2013" target="_blank">Javascript Resources</a>
        <li><a href="http://jiren.github.io/filter.js/" target="_blank">Filter JS</a></li>
        <li><a href="http://listjs.com/" target="_blank">List JS</a></li>
    </ul>
    <div id="content">
        <div class="post-heirarchy">Posted in: <a href="http://learn.jquery.com/javascript-101/">JavaScript 101</a>
    </div>
    <article id="post-164" class="post-164 page type-page status-publish hentry">
        <header class="entry-header">
            <h1 class="entry-title">Running Code</h1>
        </header>
        <!-- .entry-header -->
        <div class="entry-content">
            <h3 class="toc-linked"><a href="http://learn.jquery.com/javascript-101/running-code/#external" id="external" class="icon-link toc-link"><span class="visuallyhidden">link</span></a> External</h3>
            <p>The first and recommended option is to write code in an external file (with a <code>.js</code> extension), which can then be included on our web page using an HTML <code>&lt;script&gt;</code> tag and pointing the <code>src</code> attribute to the file's location. Having JavaScript in a separate file will reduce code duplication if you want to reuse it on other pages. It will also allow the browser to cache the file on the remote client's computer, decreasing page load time.</p>
            <div class="syntaxhighlighter xml nogutter">
                <table>
                    <tbody>
                        <tr>
                            <td class="gutter">
                                <div class="line n1">1</div>
                                <div class="line n2">2</div>
                            </td>
                            <td class="code">
                                <pre><div class="container"><div class="line"><code><span class="comment">&lt;!-- Code is written in a .js file, included via the script tag src attribute. --&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/path/to/example.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span></code></div></div></pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="toc-linked"><a href="http://learn.jquery.com/javascript-101/running-code/#inline" id="inline" class="icon-link toc-link"><span class="visuallyhidden">link</span></a> Inline</h3>
            <p>The second option is to inline the code directly on the web page. This is also achieved using HTML <code>&lt;script&gt;</code> tags, but instead of pointing the <code>src</code> attribute to a file, the code is placed between the tags. While there are use cases for this option, the majority of the time it is best to keep our code in an external file as described above.</p>
            <div class="syntaxhighlighter xml nogutter">
                <table>
                    <tbody>
                        <tr>
                            <td class="gutter">
                                <div class="line n1">1</div>
                                <div class="line n2">2</div>
                                <div class="line n3">3</div>
                                <div class="line n4">4</div>
                            </td>
                            <td class="code">
                                <pre><div class="container"><div class="line"><code><span class="comment">&lt;!-- Embed code directly on a web page using script tags. --&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript"></span></code></div></div><div class="container"><div class="line"><code>alert( <span class="string">"Hello World!"</span> );</code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">script</span>&gt;</span></code></div></div></pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="toc-linked"><a href="http://learn.jquery.com/javascript-101/running-code/#attributes" id="attributes" class="icon-link toc-link"><span class="visuallyhidden">link</span></a> Attributes</h3>
            <p>The last option is to use the event handler attributes of HTML elements. This method is strongly discouraged:</p>
            <div class="syntaxhighlighter xml nogutter">
                <table>
                    <tbody>
                        <tr>
                            <td class="gutter">
                                <div class="line n1">1</div>
                                <div class="line n2">2</div>
                                <div class="line n3">3</div>
                            </td>
                            <td class="code">
                                <pre><div class="container"><div class="line"><code><span class="comment">&lt;!-- Inline code directly on HTML elements being clicked. --&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"javascript:alert( 'Hello World' );"</span>&gt;</span>Click Me!<span class="tag">&lt;/<span class="title">a</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">button</span> <span class="attribute">onClick</span>=<span class="value">"alert( 'Good Bye World' );"</span>&gt;</span>Click Me Too!<span class="tag">&lt;/<span class="title">button</span>&gt;</span></code></div></div></pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="toc-linked"><a href="http://learn.jquery.com/javascript-101/running-code/#placement" id="placement" class="icon-link toc-link"><span class="visuallyhidden">link</span></a> Placement</h3>
            <p>Placement of the previous two options is important and can vary depending on the situation. If you are including JavaScript that doesn't access the elements on the page, you can safely place the script before the closing HTML <code>&lt;head&gt;</code> tag. However, if the code will interact with the elements on the page, you have to make sure those elements exist at the time the script is executed. This common pitfall can be seen in the example below. The script for finding the element with the ID <code>hello-world</code> will be executed before the element is defined in the document.</p>
            <div class="syntaxhighlighter xml nogutter">
                <table>
                    <tbody>
                        <tr>
                            <td class="gutter">
                                <div class="line n1">1</div>
                                <div class="line n2">2</div>
                                <div class="line n3">3</div>
                                <div class="line n4">4</div>
                                <div class="line n5">5</div>
                                <div class="line n6">6</div>
                                <div class="line n7">7</div>
                                <div class="line n8">8</div>
                                <div class="line n9">9</div>
                                <div class="line n10">10</div>
                                <div class="line n11">11</div>
                                <div class="line n12">12</div>
                                <div class="line n13">13</div>
                                <div class="line n14">14</div>
                                <div class="line n15">15</div>
                            </td>
                            <td class="code">
                                <pre><div class="container"><div class="line"><code><span class="doctype">&lt;!doctype html&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">html</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">head</span>&gt;</span></code></div></div><div class="container"><div class="line"><code>    <span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript"></span></code></div></div><div class="container"><div class="line"><code>    <span class="comment">// Attempting to access an element too early will have unexpected results.</span></code></div></div><div class="container"><div class="line"><code>    <span class="keyword">var</span> title = document.getElementById( <span class="string">"hello-world"</span> );</code></div></div><div class="container"><div class="line"><code>    console.log( title );</code></div></div><div class="container"><div class="line"><code>    <span class="tag">&lt;/<span class="title">script</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">head</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">body</span>&gt;</span></code></div></div><div class="container"><div class="line"><code> </code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">h1</span> <span class="attribute">id</span>=<span class="value">"hello-world"</span>&gt;</span>Hello World<span class="tag">&lt;/<span class="title">h1</span>&gt;</span></code></div></div><div class="container"><div class="line"><code> </code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">body</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">html</span>&gt;</span></code></div></div></pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>It is a common pattern to move scripts to the bottom of the page, prior to the closing HTML <code>&lt;body&gt;</code> tag. This will guarantee that elements are defined when the script is executed:</p>
            <div class="syntaxhighlighter xml nogutter">
                <table>
                    <tbody>
                        <tr>
                            <td class="gutter">
                                <div class="line n1">1</div>
                                <div class="line n2">2</div>
                                <div class="line n3">3</div>
                                <div class="line n4">4</div>
                                <div class="line n5">5</div>
                                <div class="line n6">6</div>
                                <div class="line n7">7</div>
                                <div class="line n8">8</div>
                                <div class="line n9">9</div>
                                <div class="line n10">10</div>
                                <div class="line n11">11</div>
                                <div class="line n12">12</div>
                                <div class="line n13">13</div>
                                <div class="line n14">14</div>
                            </td>
                            <td class="code">
                                <pre>
                                    <div class="container">
                                        <div class="line"><code><span class="doctype">&lt;!doctype html&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">html</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">head</span>&gt;</span><span class="tag">&lt;/<span class="title">head</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">body</span>&gt;</span></code></div></div><div class="container"><div class="line"><code> </code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">h1</span> <span class="attribute">id</span>=<span class="value">"hello-world"</span>&gt;</span>Hello World<span class="tag">&lt;/<span class="title">h1</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript"></span></code></div></div><div class="container"><div class="line"><code><span class="comment">// Moving the script to the bottom of the page will make sure the element exists.</span></code></div></div><div class="container"><div class="line"><code><span class="keyword">var</span> title = document.getElementById( <span class="string">"hello-world"</span> );</code></div></div><div class="container"><div class="line"><code>console.log( title );</code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">script</span>&gt;</span></code></div></div><div class="container"><div class="line"><code> </code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">body</span>&gt;</span></code></div></div><div class="container"><div class="line"><code><span class="tag">&lt;/<span class="title">html</span>&gt;</span></code></div></div>
                                Converting Strings to Numbers
                                parseInt - Returns Numbers as Whole Numbers
                                parseFloat - Returns Numbers as Numbers With Decimal Points
                                Variables
                                Declaring Variables - Use Var
                                Variable Scope
                                Global Variable - When you declare a variable outside of any function
                                Local Variable - When you declare a variable within a function
                                Constant
                                You can create a read-only, named constant with the const keyword
                                Boolean Literals
                                The Boolean type has two literal values:l true and false
                                </pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
<?php include 'footer.php';?>