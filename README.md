# Buto-Plugin-StringArray



Inlude plugin and create an object.
```
wfPlugin::includeonce('string/array');
$plugin = new PluginStringArray();
```


## Methods
```
print_r($plugin->from_space('a b c'));
print_r($plugin->from_slash('aaa/bbb/ccc'));
print_r($plugin->from_tab($value));
print_r($plugin->from_char($value, ':'));
print_r($plugin->from_br($value));

```





