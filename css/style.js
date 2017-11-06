import { StyleSheet } from 'react-native';

export default StyleSheet.create({
  'navbar': {
    'minHeight': [{ 'unit': 'string', 'value': 'inherit' }]
  },
  'header title': {
    'textAlign': 'center',
    'padding': [{ 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 0 }],
    'fontSize': [{ 'unit': 'px', 'value': 16 }],
    'color': '#87cefa',
    'backgroundColor': '#aaa'
  },
  'form-title': {
    'padding': [{ 'unit': 'px', 'value': 6 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 6 }, { 'unit': 'px', 'value': 0 }],
    'fontSize': [{ 'unit': 'px', 'value': 16 }],
    'fontWeight': 'bold',
    'textAlign': 'center',
    'background': '#aaa',
    'color': '#fff',
    'margin': [{ 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }]
  },
  'table': {
    'marginBottom': [{ 'unit': 'px', 'value': 10 }]
  },
  '#navbar-tabs': {
    'display': 'none'
  },
  'form-btns': {
    'marginTop': [{ 'unit': 'px', 'value': 30 }],
    'marginBottom': [{ 'unit': 'px', 'value': 30 }],
    'color': '#ff0000'
  },
  '#form-e1': {
    'display': 'none'
  },
  '#form-e2': {
    'display': 'none'
  }
});
