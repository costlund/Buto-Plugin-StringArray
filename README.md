# Buto-Plugin-StringArray



Inlude plugin and create an object.
```
wfPlugin::includeonce('string/array');
$plugin = new PluginStringArray();
```

Create array from string with space.
```
print_r($plugin->from_space('a b c'));
```


Create array from string with slash.
```
print_r($plugin->from_slash('aaa/bbb/ccc'));

```



