# Buto-Plugin-StringArray



Inlude plugin and create an object.
```
wfPlugin::includeonce('string/array');
$plugin = new PluginStringArray();
```


## Methods

### From space
```
print_r($plugin->from_space('a b c'));
```
### From slash
```
print_r($plugin->from_slash('aaa/bbb/ccc'));
```
### From tab
```
print_r($plugin->from_tab($value));
```
### From char
Passing the char as second param.
```
print_r($plugin->from_char($value, ':'));
```
### From br
```
print_r($plugin->from_br($value));
```
### From excel_data
Copied excel data. Should be tab separated values.
```
print_r($plugin->from_excel_data($value));
```
