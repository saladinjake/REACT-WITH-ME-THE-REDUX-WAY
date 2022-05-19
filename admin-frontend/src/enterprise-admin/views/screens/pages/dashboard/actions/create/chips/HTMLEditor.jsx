import * as React from "react";
import { render } from "react-dom";
// import ReactQuill, { Mixin, Toolbar, Quill } from "react-quill";
import Dropzone, { ImageFile } from "react-dropzone";
//import "react-quill/dist/quill.snow.css";
import $ from "jquery";

// export default HtmlEditor
class Editor extends React.Component {
  constructor(props) {
    super(props);
    this.state = { editorHtml: this.props.value, theme: "snow" };
    this.handleChange = this.handleChange.bind(this);
  }

  handleChange(html) {
    this.setState({ editorHtml: html });
    this.props.action(html);

    this.props.stateAction(this.props.placeholder, html);
  }

  componentDidMount() {
    
  }

  render() {
    return (
      <div >
        <br />
        <br />
        <div>
          <p
            
          >
            {this.props.placeholder}{" "}
          </p>
          
        </div>
        {/*<ReactQuill
          theme={this.state.theme}
          onChange={(e) => {
            this.handleChange(e);
          }}
          value={this.state.editorHtml}
          name={this.props.name}
          modules={Editor.modules}
          formats={Editor.formats}
          bounds={".app"}
          placeholder={this.props.placeholder}
        />*/}

        <textarea  placeholder={this.props.placeholder} onChange={(e) => {
            this.handleChange(e);
          }}>{this.props.placeholder}</textarea>

       
      </div>
    );
  }
}

/*
 * Quill modules to attach to editor
 * See https://quilljs.com/docs/modules/ for complete options
 */
// Editor.modules = {
//   toolbar: [
//     [
//       { header: "1" },
//       { header: "2" },
//       { header: "3" },
//       { header: "4" },
//       { header: "5" },
//       { header: "6" },
//       { font: [] },
//     ],
//     [{ size: [] }],
//     ["bold", "italic", "underline", "strike", "blockquote"],
//     [
//       { list: "ordered" },
//       { list: "bullet" },
//       { indent: "-1" },
//       { indent: "+1" },
//     ],
//     ["link", "image", "video"],
//     ["clean"],
//   ],
//   clipboard: {
//     // toggle to add extra line breaks when pasting HTML:
//     matchVisual: false,
//   },
// };
// /*
//  * Quill editor formats
//  * See https://quilljs.com/docs/formats/
//  */
// Editor.formats = [
//   "header",
//   "font",
//   "size",
//   "bold",
//   "italic",
//   "underline",
//   "strike",
//   "blockquote",
//   "list",
//   "bullet",
//   "indent",
//   "link",
//   "image",
//   "video",
//   "color",
//   "align",

//   "image",
//   "video",
//   //
// ];


export default Editor;