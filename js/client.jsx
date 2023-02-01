import { createReactClient, studioProvider } from '@livepeer/react';
 
const client = createReactClient({
  provider: studioProvider({ apiKey: 'yourStudioApiKey' }),
});

import {
    LivepeerConfig,
    createReactClient,
    studioProvider,
  } from '@livepeer/react';
   
  const client = createReactClient({
    provider: studioProvider({ apiKey: 'yourStudioApiKey' }),
  });
   
  function App() {
    return (
      <LivepeerConfig client={client}>
        <SomeComponent />
      </LivepeerConfig>
    );
  }

import { useAsset } from '@livepeer/react';
 
function SomeComponent() {
  const asset = useAsset({ assetId: 'd8e8b87d-6774-4083-a2d7-4e85872d18cd' });
 
  return <div>Asset: {asset.name}</div>;
}